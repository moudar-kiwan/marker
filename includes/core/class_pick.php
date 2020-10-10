<?php

	//use PhpOffice\PhpSpreadsheet\Spreadsheet;

	class Pick {

		// GENERAL
		
		public static function picks_list($data) {
			// vars
			
			$info = [];
			$query = isset($data['query']) ? trim($data['query']) : '';
			$offset = isset($data['offset']) && is_numeric($data['offset']) ? $data['offset'] : 0;
			$limit = 20;
			
			
			// info
			$user = User::user_info(Session::$user_id);
			// where
			$where = [];
			$where[] = "company_id='".Session::$company_id."'";
			
			if ($query) {
				$where_search = [];
				$search = self::picks_search($query);				
				if ($search['picks_ids']) $where_search[] = "pick_id IN (".implode(",", $search['picks_ids']).")";
				$where_search[] = "pick_id = '$query'";
				$where_search[] = "DATE_FORMAT(FROM_UNIXTIME(created), '%d.%m.%y') = '$query'";
				
				$where[] = $where_search ? implode(" OR ", $where_search) : "pick_id='0'";
				
				
			}
			
			
			
			
			$where = implode(' AND ', $where);
			// info
			$q = DB::query("SELECT pick_id, user_id, status, count_products, created FROM picks WHERE ".$where." ORDER BY pick_id DESC LIMIT ".$offset.", ".$limit.";") or die (DB::error());
			while ($row = DB::fetch_row($q)) {
				$products = Pick_Product::pick_products_list($row['pick_id'],$query);
				$info[] = [
					'id'=>$row['pick_id'],
					'user_id'=>$row['user_id'],
					'status'=>$row['status'],
					'products'=>$products['items'],
					'count_products'=>$row['count_products'],
					'manufacturers'=>$products['manufacturers'],
					'created'=>date('d.m.y в H:i', ts_timezone($row['created'], Session::$tz))
				];
			}
			// paginator
			$q = DB::query("SELECT count(*) FROM picks WHERE ".$where.";") or die (DB::error());
			$count = ($row = DB::fetch_row($q)) ? $row['count(*)'] : 0;
			$paginator = paginator($count, $offset, $limit, 'pick.paginator');
			// output
			return ['info'=>$info, 'paginator'=>$paginator];
		}
		
		
		
		public static function picks_fetch($data = []) {
			$picks = self::picks_list($data);
			HTML::assign('picks', $picks['info']);
			return ['info'=>HTML::fetch('./partials/section/picks/picks_table.html'), 'paginator'=>$picks['paginator']];
		}
		
		// ACTIONS
		
		public static function pick_export($data) {
			// vars
			$pick_id = isset($data['pick_id']) && is_numeric($data['pick_id']) ? $data['pick_id'] : 0;
			$product_ids = Pick_Product::pick_product_ids($pick_id);
			// export
			$filename = Pick_Product::pick_products_export($pick_id, $product_ids);
			// open
			$fp = fopen($filename, 'rb');
			fpassthru($fp);
			exit();
		}
		
		public static function pick_archive_toggle($data) {
			// vars
			$pick_id = isset($data['pick_id']) && is_numeric($data['pick_id']) ? $data['pick_id'] : 0;
			$offset = isset($data['offset']) && is_numeric($data['offset']) ? $data['offset'] : 0;
			$status = isset($data['status']) && in_array($data['status'], [0,1]) ? $data['status'] : 0;
			$status_prev = $status == 0 ? 1 : 0;
			// update
			DB::query("UPDATE picks SET status='".$status."' WHERE pick_id='".$pick_id."' LIMIT 1;") or die (DB::error());
			// output
			$info = self::picks_fetch(['offset'=>$offset, 'status'=>$status_prev]);
			return ['info'=>$info['info'], 'paginator'=>$info['paginator']];
		}
		
		
		
			///////////////////////// Moudar ///////////////////////////////
	public static function picks_search1($query) {
			// vars
			$company_ids = [];
			$product_ids = [];
			$user_ids = [];
			$picks_ids = [];
			// companies
			$q = DB::query("SELECT company_id FROM companies WHERE title_full LIKE '%".$query."%';") or die (DB::error());
			while ($row = DB::fetch_row($q)) $company_ids[] = $row['company_id'];
			// products (where)
			$where = [];
			$where[] = "title LIKE '%".$query."%'";
			if ($company_ids) $where[] = "company_id IN (".implode(",", $company_ids).")";
			$where = implode(" OR ", $where);
			// products
			$q = DB::query("SELECT product_id FROM products WHERE ".$where.";") or die (DB::error());
			while ($row = DB::fetch_row($q)) $product_ids[] = $row['product_id'];
			
			// users (where)
			$where = [];
			$queries = explode(" ", $query);
			if (count($queries) == 1) $where[] = "(first_name LIKE '%".$query."%' OR last_name LIKE '%".$query."%')";
			else {
				$where_tmp = [];
				foreach($queries as $q) $where_tmp[] = "(first_name LIKE '%".$q."%' OR last_name LIKE '%".$q."%')";
				$where[] = implode(" AND ", $where_tmp);
			}
			$where = implode(" OR ", $where);
			// users
			$q = DB::query("SELECT user_id FROM users WHERE ".$where.";") or die (DB::error());
			while ($row = DB::fetch_row($q)) $user_ids[] = $row['user_id'];
			
			// output
			return ['product_ids'=>$product_ids, 'user_ids'=>$user_ids];
		}
		
		
			public static function picks_search($query) {
			// vars
			$company_ids = [];
			$product_ids = [];
			$user_ids = [];
			$picks_ids = [];
			// companies
			$q = DB::query("SELECT company_id FROM companies WHERE title_full LIKE '%".$query."%';") or die (DB::error());
			while ($row = DB::fetch_row($q)) $company_ids[] = $row['company_id'];
			
			
			// products (where)
			$where = [];
			$where[] = "title LIKE '%".$query."%'";
			if ($company_ids) $where[] = "company_id IN (".implode(",", $company_ids).")";
			$where = implode(" OR ", $where);
			// products
			$q = DB::query("SELECT product_id FROM products WHERE ".$where.";") or die (DB::error());
			while ($row = DB::fetch_row($q)) $product_ids[] = $row['product_id'];

			// picks (where)
			$where = [];
			if ($product_ids) $where[] = "product_id IN (".implode(",", $product_ids).")";
			$where = implode(" OR ", $where);

			// products

			if ($product_ids) $my_wherw = "product_id IN (".implode(",", $product_ids).")";
			else $my_wherw = $product_id=0;
					
			$q = DB::query("SELECT pick_id FROM pick_products WHERE ".$my_wherw.";") or die (DB::error());
			while ($row = DB::fetch_row($q)) $picks_ids[] = $row['pick_id'];

			// output

			return ['product_ids'=>$product_ids, 'picks_ids'=>$picks_ids];
		}

	}
	
	

?>