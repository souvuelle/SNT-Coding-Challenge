$q = DB::table('tbl_Property')->where('PK_PropertyID', $idproperty);


// field loop
foreach($fields as $field){
    // field is active
    if(isset($_GET[$field]) && !empty($_GET[$field])) {
        // create a new condition
        $q = $q->where($field, 'LIKE', '%' . $_GET[$field] . '%');
		$q1 = $q->SortBy($field2, 'SortBy', '%' . $_GET[$field2] . '%')
    }
}

$result = $q->get();

foreach ($result as $row) {
    echo $row->column_name;
}