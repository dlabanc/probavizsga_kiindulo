<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Szakdoga;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('szakdoga', function (Blueprint $table) {
            $table->id();
            $table->string('szakdoga_nev');
            $table->string('githublink');
            $table->string('oldallink');
            $table->string('tagokneve');
            $table->timestamps();
        });

        Szakdoga::create(['szakdoga_nev' => 'Atlantis Mozi', 'githublink' => 'https://github.com', 'oldallink' => 'weboldal', 'tagokneve' => 'Váradi Ákos, Szikora Melinda, Szabó Anett']);
        Szakdoga::create(['szakdoga_nev' => 'Autókölcsönző', 'githublink' => 'https://github.com', 'oldallink' => 'weboldal', 'tagokneve' => 'Váradi Ákos, Szikora Melinda, Szabó Anett']);
        Szakdoga::create(['szakdoga_nev' => 'Bika edzőterem', 'githublink' => 'https://github.com', 'oldallink' => 'weboldal', 'tagokneve' => 'Váradi Ákos, Szikora Melinda, Szabó Anett']);
        Szakdoga::create(['szakdoga_nev' => 'Gyorsétterem', 'githublink' => 'https://github.com', 'oldallink' => 'weboldal', 'tagokneve' => 'Váradi Ákos, Szikora Melinda, Szabó Anett']);
        Szakdoga::create(['szakdoga_nev' => 'Autókereskedés', 'githublink' => 'https://github.com', 'oldallink' => 'weboldal', 'tagokneve' => 'Váradi Ákos, Szikora Melinda, Szabó Anett']);
        Szakdoga::create(['szakdoga_nev' => 'Neobölcsi', 'githublink' => 'https://github.com', 'oldallink' => 'weboldal', 'tagokneve' => 'Váradi Ákos, Szikora Melinda, Szabó Anett']);
        Szakdoga::create(['szakdoga_nev' => 'Totyogók', 'githublink' => 'https://github.com', 'oldallink' => 'weboldal', 'tagokneve' => 'Váradi Ákos, Szikora Melinda, Szabó Anett']);
        Szakdoga::create(['szakdoga_nev' => 'Bőröndök', 'githublink' => 'https://github.com', 'oldallink' => 'weboldal', 'tagokneve' => 'Váradi Ákos, Szikora Melinda, Szabó Anett']);
        Szakdoga::create(['szakdoga_nev' => 'Beosztáskezelő', 'githublink' => 'https://github.com', 'oldallink' => 'weboldal', 'tagokneve' => 'Váradi Ákos, Szikora Melinda, Szabó Anett']);
        Szakdoga::create(['szakdoga_nev' => 'Takarítóbrigád', 'githublink' => 'https://github.com', 'oldallink' => 'weboldal', 'tagokneve' => 'Váradi Ákos, Szikora Melinda, Szabó Anett']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('szakdogas');
    }
};
