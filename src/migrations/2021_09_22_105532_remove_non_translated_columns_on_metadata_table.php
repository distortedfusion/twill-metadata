<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveNonTranslatedColumnsOnMetadataTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('metadata', function(Blueprint $table){
            $table->dropColumn('title');
            $table->dropColumn('description');
            $table->dropColumn('og_title');
            $table->dropColumn('og_description');
            $table->dropColumn('canonical_url');
        });
    }

    public function down()
    {
        Schema::table('metadata', function(Blueprint $table){
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('og_title')->nullable();
            $table->text('og_description')->nullable();
            $table->string('canonical_url')->nullable();
        });
    }


}