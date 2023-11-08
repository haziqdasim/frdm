<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::disableForeignKeyConstraints();

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('station_id')->references('id')->on('stations');
            $table->foreign('status_id')->references('id')->on('user_statuses');
        });

        Schema::table('firetrucks', function (Blueprint $table) {
            $table->foreign('station_id')->references('id')->on('stations');
        });

        Schema::table('firefighters', function (Blueprint $table) {
            $table->foreign('station_id')->references('id')->on('stations');
        });

        Schema::table('inventories', function (Blueprint $table) {
            $table->foreign('firetruck_id')->references('id')->on('firetrucks');
        });

        Schema::table('inventory_logs', function (Blueprint $table) {
            $table->foreign('inventory_id')->references('id')->on('inventories');
            $table->foreign('status_id')->references('id')->on('inventory_statuses');

        });

        Schema::table('firetruck_to_firefighters', function (Blueprint $table) {
            $table->foreign('firefighter_id')->references('id')->on('firefighters');
            $table->foreign('firetruck_id')->references('id')->on('firetrucks');
        });

        Schema::table('firetruck_to_incidents', function (Blueprint $table) {
            $table->foreign('incident_id')->references('id')->on('incidents');
            $table->foreign('firetruck_id')->references('id')->on('firetrucks');
        });

        Schema::table('firetruck_locations', function (Blueprint $table) {
            $table->foreign('firetruck_id')->references('id')->on('firetrucks');
        });

        Schema::table('incident_attachments', function (Blueprint $table) {
            $table->foreign('incident_id')->references('id')->on('incidents');
        });

        Schema::table('incident_logs', function (Blueprint $table) {
            $table->foreign('incident_id')->references('id')->on('incidents');
            $table->foreign('reporting_firetruck_id')->references('id')->on('firetrucks');
            $table->foreign('status_id')->references('id')->on('incident_statuses');
        });

        Schema::table('preplan_attachments', function (Blueprint $table) {
            $table->foreign('preplan_id')->references('id')->on('preplans');
        });

        Schema::table('preplans', function(Blueprint $table)
        {
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('state_id')->references('id')->on('states');
        });

        Schema::table('incidents', function(Blueprint $table)
        {
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('state_id')->references('id')->on('states');
        });

        Schema::table('stations', function (Blueprint $table) {
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('status_id')->references('id')->on('station_statuses');
        });

        Schema::table('incident_backups', function (Blueprint $table) {
            $table->foreign('incident_id')->references('id')->on('incidents');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::disableForeignKeyConstraints();

        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_station_id_foreign');
            $table->dropForeign('users_status_id_foreign');

        });

        Schema::table('firetrucks', function (Blueprint $table) {
            $table->dropForeign('firetrucks_station_id_foreign');
        });

        Schema::table('firefighters', function (Blueprint $table) {
            $table->dropForeign('firefighters_station_id_foreign');
        });

        Schema::table('inventories', function (Blueprint $table) {
            $table->dropForeign('inventories_firetruck_id_foreign');
        });

        Schema::table('inventory_logs', function (Blueprint $table) {
            $table->dropForeign('inventory_logs_inventory_id_foreign');
            $table->dropForeign('inventory_logs_status_id_foreign');

        });

        Schema::table('firetruck_to_firefighters', function (Blueprint $table) {
            $table->dropForeign('firetruck_to_firefighters_firefighter_id_foreign');
            $table->dropForeign('firetruck_to_firefighters_firetruck_id_foreign');
        });

        Schema::table('firetruck_to_incidents', function (Blueprint $table) {
            $table->dropForeign('firetruck_to_incidents_firetruck_id_foreign');
            $table->dropForeign('firetruck_to_incidents_incident_id_foreign');
        });

        Schema::table('firetruck_locations', function (Blueprint $table) {
            $table->dropForeign('firetruck_locations_firetruck_id_foreign');
        });

        Schema::table('incident_attachments', function (Blueprint $table) {
            $table->dropForeign('incident_attachments_incident_id_foreign');
        });

        Schema::table('incident_logs', function (Blueprint $table) {
            $table->dropForeign('incident_logs_incident_id_foreign');
            $table->dropForeign('incident_logs_reporting_firetruck_id_foreign');
            $table->dropForeign('incident_logs_status_id_foreign');
        });

        Schema::table('preplan_attachments', function (Blueprint $table) {
            $table->dropForeign('preplan_attachments_preplan_id_foreign');
        });

        Schema::table('preplans', function(Blueprint $table)
        {
            $table->dropForeign('preplans_city_id_foreign');
            $table->dropForeign('preplans_state_id_foreign');
        });

        Schema::table('incidents', function(Blueprint $table)
        {
            $table->dropForeign('incidents_city_id_foreign');
            $table->dropForeign('incidents_state_id_foreign');
        });

        Schema::table('stations', function (Blueprint $table) {
            $table->dropForeign('stations_city_id_foreign');
            $table->dropForeign('stations_state_id_foreign');
            $table->dropForeign('stations_status_id_foreign');
        });

        Schema::table('incident_backups', function (Blueprint $table) {
            $table->dropForeign('incident_backups_incident_id_foreign');
        });

        Schema::enableForeignKeyConstraints();
    }
};
