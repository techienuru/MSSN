<?php


require_once '/../src/DBFlex.php'; 


// Initialize the DB class with  MYSQL database credentials
$db = new DBFlex('mysql', 'localhost', 'dbuser', 'dbpassword', 'test_db');

$dbPath = 'sqlite.db';
// Initialize the DB class with  SQLITE database credentials
$db = new DBFlex('sqlite', null, null, null, null, $dbPath);

//  Insert Datas
$data = ['name' => 'John Doe', 
'email' => 'john@example.com'];
$id = $db->table('users')->insert($data);
echo "Inserted ID: " . $id . "\n"; // getting last inserted ID;

//  Selecting specific columns
$db->table('users')->select('name')->where('id', $id);
$results = $db->get();
echo "Select Result:\n";
print_r($results);

// selecting All columns
$db->table('users');
$results = $db->get();
echo "Select Result:\n";
print_r($results);

// where clause using equality operator
$db->table('users')->select('name')->where('id', $id, '=');
$results = $db->get();
echo "Select Result:\n";
print_r($results);

// where clause using lessthan operator
$db->table('users')->select('name')->where('id', $id, '<');
$results = $db->get();
echo "Select Result:\n";
print_r($results);

// where clause using greathan operator
$db->table('users')->select('name')->where('id', $id, '>');
$results = $db->get();
echo "Select Result:\n";
print_r($results);


// where clause using default which is equality operator
$db->table('users')->select('name')->where('id', $id);
$results = $db->get();
echo "Select Result:\n";
print_r($results);

//  Update Data
$data = ['name' => 'Jane Doe'];
$db->table('users')->where('id', $id)->update($data);
$db->table('users')->select('name')->where('id', $id);
$results = $db->get();
echo "Updated Result:\n";
print_r($results);

//  Delete Data
$db->table('users')->where('id', $id)->delete();
$db->table('users')->select()->where('id', $id);
$results = $db->get();
echo "After Delete:\n";
print_r($results);

//  Count 
$count = $db->table('users')->count();
echo "User Count: " . $count . "\n";

//  OrderBy
$db->table('users')->select('name')->orderBy('name', 'DESC');
$results = $db->get();
echo "Ordered Results:\n";
print_r($results);

//  Limit for pagination
$db->table('users')->select('name')->limit(1);
$results = $db->get();
echo "Limited Results:\n";
print_r($results);

//  Offset for pagination
$db->table('users')->select('name')->offset(1)->limit(1);
$results = $db->get();
echo "Offset Results:\n";
print_r($results);

//  Join : Inner Join
$db->table('users')
    ->select('users.name, orders.id')
    ->join('orders', 'users.id', '=', 'orders.user_id');
$results = $db->get();
echo "Join Results:\n";
print_r($results);

//  Left Join
echo " Left Join...\n";
$db->table('users')
    ->select('users.name', 'orders.product')
    ->leftJoin('orders', 'users.id', '=', 'orders.user_id');
$results = $db->get();
echo "Left Join Results:\n";
print_r($results);

//  Right Join
echo " Right Join...\n";
$db->table('users')
    ->select('users.name', 'orders.product')
    ->rightJoin('orders', 'users.id', '=', 'orders.user_id');
$results = $db->get();
echo "Right Join Results:\n";
print_r($results);


//   get first data
$db->table('users')->where('status', 1)->first();
print_r($results);

//  Raw Query
$db->raw('SELECT * FROM users WHERE email = ?', ['john@example.com']);
$results = $db->get();
echo "Raw Query Results:\n";
print_r($results);

//  GroupBy
$db->table('orders')->select('COUNT(*) as count')->groupBy('status');
$results = $db->get();
echo "GroupBy Results:\n";
print_r($results);

//  Search
$db->table('users')->select('name')->search(['name'], 'John');
$results = $db->get();
echo "Search Results:\n";
print_r($results);

// Transaction 

$db->startTransaction();
if($db->table('users')->insert($data))
{
    $db->commit();
} else {
    $db->rollback();
}


?>
