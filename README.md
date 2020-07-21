# Query Builder
Simple php Query Bilder class that work with pdo class to access different types of databases systems.<br/>
Use it and save your time writing queries.<br/>

### Usage
``` php
  use System\DB;
  
  // Get all data from table
  $data = DB::query('tablename')->all()->get();
  
  // Get limited data
  $data = DB::query('tablename')
            ->all()
            ->limit(20)
            ->get();
  
  // Get specific columns from table
  $data = DB::query('tablename')
            ->select('id, username, email')
            ->where('id', '<', '80')
            ->orderBy('id', 'DESC')
            ->get();
            
  // Get only one column
  $data = DB::query('tablename')->select('COUNT(id) AS total')->first();
            
  // Insert
  DB::query('tablename')->insert([
    'id' => 1,
    'username' => 'ahmed',
    'email' => 'ahmed@gmail.com'
  ])->save();
  
  // Update
  DB::query('tablename')->update([
    'username' => 'omar',
    'email' => 'omar@gmail.com'
  ])->where('id', '=', 5)->save();
  
  // Delete
  DB::query('tablename')->delete()->where('id', '=', 3)->save();

  // Truncate
  DB::query('tablename')->truncate()->save();
  
  // Custom Query
  DB::query()->custom('TRUNCATE TABLE tablename');
  
  $data = DB::query()->custom('SELECT * FROM tablename')
```
