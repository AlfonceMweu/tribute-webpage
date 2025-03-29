<?php
// require_once('vendor/autoload.php');
// use Supabase\SupabaseClient;
// use Supabase\Service;
// $supabaseUrl = "https://lhcbsoesruuegousfivo.supabase.co";
// $supabaseKey = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImxoY2Jzb2VzcnV1ZWdvdXNmaXZvIiwicm9sZSI6ImFub24iLCJpYXQiOjE3NDI0NTA2ODcsImV4cCI6MjA1ODAyNjY4N30.NA3ZAQc1ctLrndmUkK4qNHBh6Cj2aYFrl8KviwdgnQY";
// $supabase = new SupabaseClient([
//     'url' => $supabaseUrl,
//     'k' => $supabaseKey,
// ]); 
// $service = new Service($supabase);
// $response = $service
//     ->from('bio_data')
//     ->select('*')
//     ->execute();
//     echo json_encode($response['data']);

    $host = 'aws-0-us-west-1.pooler.supabase.com';
    $port = '5432'; // Default PostgreSQL port
    $dbname = 'tribute';
    $user = 'postgres.mrmaemsafungilejgdfs ';
    $password = 'kinyanjui001david';
    
    // Connection string
    $conn_str = "host=$host port=$port dbname=$dbname user=$user password=$password";
    
    // Establish the connection
    $conn = pg_connect($conn_str);
    if($conn){
        $result = pg_query($conn, "SELECT * FROM bio_data");
        echo json_encode($result);
    }

// $con = new mysqli('localhost', 'root', 'kinyanjui001david', 'tribute');
?>