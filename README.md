# Query Builder
Simple php Query Bilder class that work with pdo class to access different types of databases systems.<br/>
Use it and save your time writing queries.<br/>

### Usage
``` php
  use System\DB;
  
  // Get data from database
  $data = DB::query('tablename')
            ->select('id, username, email')
            ->where('id', '<', '80')
            ->orderBy('id', 'DESC')
            ->get();
            
  // Insert
  DB::query('tablename')->insert([
    'id' => 1,
    'username' => 'ahmed',
    'email' => 'ahmed@gmail.com'
  ]);
  
  // Update
  DB::query('tablename')->update([
    'username' => 'omar',
    'email' => 'omar@gmail.com'
  ], 'id = 2');
  
  // Delete
  DB::query('tablename')->delete()->where('id', '=', 3)->save();
```
