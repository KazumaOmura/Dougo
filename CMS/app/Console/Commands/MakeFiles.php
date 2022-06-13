<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\DB;

use Illuminate\Console\Command;

use App\ORM\Generated\Repository\SampleRepository;

class MakeFiles extends Command
{
    protected $signature = 'make:Files';
    protected $description = 'Reoisitory,Modelの作成';

    public function handle()
    {
        // 全スキーマ情報を取得
        $schema = DB::connection()->getDoctrineSchemaManager();
        // var_dump($schema);

        // テーブル名一覧を取得
        $tableNames = $schema->listTableNames();
        foreach ($tableNames as $tableName) {

            $tableName_ucFirst = ucfirst(strtolower($tableName));

            // テーブル情報を取得
            $schema = DB::connection()->getDoctrineSchemaManager();
            $table = $schema->listTableDetails($tableName);

            // var_dump($table);
            // exit;

            // カラム情報を取得
            $columns = $table->getColumns();

            
            $column_list = NULL;
            $column_id = NULL;
            foreach ($columns as $column) {
                if($column->getName() != 'id') {
                    $column_list = $column_list . "'".$column->getName()."',";
                } else {
                    $column_id = "'id'";
                }
                // array_push($columnNames, $column->getName());
            }

            // Model作成
            $model_value = <<< EOF
<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
            
class Users extends Model
{
    public \$timestamps = false;
            
    protected \$table = 'users';
            
    protected \$fillable = [
       $column_list
    ];
            
    // アプリケーション側でcreateなどできない値を記述
    protected \$guarded = [
        $column_id
    ];
}
              
EOF;

            $fpath = './app/Models/';
            $fname = $fpath . $tableName_ucFirst . ".php";
            $fhandle = fopen($fname, "w"); //ファイルを書き込みモードで開く。
            fwrite($fhandle, $model_value); //ファイルをバイナリモードで書き込む。第二引数に書き込みたい文字列
            fclose($fhandle); //ファイルポインタを閉じる





            // Repository作成  
            $repo_value = <<< EOF
<?php

namespace App\ORM\Generated\Repository;
        
use App\Models\\${tableName_ucFirst};
        
class ${tableName_ucFirst}Repository
{
    public static function getAll(int \$id):object
    {
        \$all = ${tableName_ucFirst}::where('id', \$id)->get();
        return \$all;
    }
}        
EOF;

            $fpath = './app/ORM/Generated/Repository/';
            $fname = $fpath . $tableName_ucFirst . "Repository.php";
            $fhandle = fopen($fname, "w"); //ファイルを書き込みモードで開く。
            fwrite($fhandle, $repo_value); //ファイルをバイナリモードで書き込む。第二引数に書き込みたい文字列
            fclose($fhandle); //ファイルポインタを閉じる
        }
    }
}
