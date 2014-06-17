<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('events', function(Blueprint $table) {
			$table->foreign('eventtype_id')->references('id')->on('eventtypes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('events', function(Blueprint $table) {
			$table->foreign('image_id')->references('id')->on('images')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('event_member', function(Blueprint $table) {
			$table->foreign('event_id')->references('id')->on('events')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('event_member', function(Blueprint $table) {
			$table->foreign('member_id')->references('id')->on('members')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('event_member', function(Blueprint $table) {
			$table->foreign('function_id')->references('id')->on('functions')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('images', function(Blueprint $table) {
			$table->foreign('artist_id')->references('id')->on('artists')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('event_function', function(Blueprint $table) {
			$table->foreign('event_id')->references('id')->on('events')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('event_function', function(Blueprint $table) {
			$table->foreign('function_id')->references('id')->on('functions')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('event_printingtype', function(Blueprint $table) {
			$table->foreign('printingtype_id')->references('id')->on('printingtypes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('event_printingtype', function(Blueprint $table) {
			$table->foreign('event_id')->references('id')->on('events')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('event_ticketcategorie', function(Blueprint $table) {
			$table->foreign('ticketcategorie_id')->references('id')->on('ticketcategories')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('event_ticketcategorie', function(Blueprint $table) {
			$table->foreign('event_id')->references('id')->on('events')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('artist_musician', function(Blueprint $table) {
			$table->foreign('musician_id')->references('id')->on('musicians')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('artist_musician', function(Blueprint $table) {
			$table->foreign('artist_id')->references('id')->on('artists')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('artist_musician', function(Blueprint $table) {
			$table->foreign('instrument_id')->references('id')->on('instruments')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('artist_genre', function(Blueprint $table) {
			$table->foreign('artist_id')->references('id')->on('artists')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('artist_genre', function(Blueprint $table) {
			$table->foreign('genre_id')->references('id')->on('genres')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('artist_event', function(Blueprint $table) {
			$table->foreign('artist_id')->references('id')->on('artists')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('artist_event', function(Blueprint $table) {
			$table->foreign('event_id')->references('id')->on('events')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('links', function(Blueprint $table) {
			$table->foreign('artist_id')->references('id')->on('artists')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('members', function(Blueprint $table) {
			$table->foreign('adresse_id')->references('id')->on('adresses')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('function_member', function(Blueprint $table) {
			$table->foreign('member_id')->references('id')->on('members')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('function_member', function(Blueprint $table) {
			$table->foreign('function_id')->references('id')->on('functions')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('equipment_event', function(Blueprint $table) {
			$table->foreign('event_id')->references('id')->on('events')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('equipment_event', function(Blueprint $table) {
			$table->foreign('equipment_id')->references('id')->on('equipments')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('event_gift', function(Blueprint $table) {
			$table->foreign('event_id')->references('id')->on('events')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('event_gift', function(Blueprint $table) {
			$table->foreign('gift_id')->references('id')->on('gifts')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('event_plateform', function(Blueprint $table) {
			$table->foreign('plateform_id')->references('id')->on('plateforms')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('event_plateform', function(Blueprint $table) {
			$table->foreign('event_id')->references('id')->on('events')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('group_id')->references('id')->on('groups')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('language_id')->references('id')->on('languages')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('groups', function(Blueprint $table) {
			$table->foreign('iheritance')->references('id')->on('groups')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('group_resource', function(Blueprint $table) {
			$table->foreign('group_id')->references('id')->on('groups')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('group_resource', function(Blueprint $table) {
			$table->foreign('resource_id')->references('id')->on('resources')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('events', function(Blueprint $table) {
			$table->dropForeign('events_eventtype_id_foreign');
		});
		Schema::table('events', function(Blueprint $table) {
			$table->dropForeign('events_image_id_foreign');
		});
		Schema::table('event_member', function(Blueprint $table) {
			$table->dropForeign('event_member_event_id_foreign');
		});
		Schema::table('event_member', function(Blueprint $table) {
			$table->dropForeign('event_member_member_id_foreign');
		});
		Schema::table('event_member', function(Blueprint $table) {
			$table->dropForeign('event_member_function_id_foreign');
		});
		Schema::table('images', function(Blueprint $table) {
			$table->dropForeign('images_artist_id_foreign');
		});
		Schema::table('event_function', function(Blueprint $table) {
			$table->dropForeign('event_function_event_id_foreign');
		});
		Schema::table('event_function', function(Blueprint $table) {
			$table->dropForeign('event_function_function_id_foreign');
		});
		Schema::table('event_printingtype', function(Blueprint $table) {
			$table->dropForeign('event_printingtype_printingtype_id_foreign');
		});
		Schema::table('event_printingtype', function(Blueprint $table) {
			$table->dropForeign('event_printingtype_event_id_foreign');
		});
		Schema::table('event_ticketcategorie', function(Blueprint $table) {
			$table->dropForeign('event_ticketcategorie_ticketcategorie_id_foreign');
		});
		Schema::table('event_ticketcategorie', function(Blueprint $table) {
			$table->dropForeign('event_ticketcategorie_event_id_foreign');
		});
		Schema::table('artist_musician', function(Blueprint $table) {
			$table->dropForeign('artist_musician_musician_id_foreign');
		});
		Schema::table('artist_musician', function(Blueprint $table) {
			$table->dropForeign('artist_musician_artist_id_foreign');
		});
		Schema::table('artist_musician', function(Blueprint $table) {
			$table->dropForeign('artist_musician_instrument_id_foreign');
		});
		Schema::table('artist_genre', function(Blueprint $table) {
			$table->dropForeign('artist_genre_artist_id_foreign');
		});
		Schema::table('artist_genre', function(Blueprint $table) {
			$table->dropForeign('artist_genre_genre_id_foreign');
		});
		Schema::table('artist_event', function(Blueprint $table) {
			$table->dropForeign('artist_event_artist_id_foreign');
		});
		Schema::table('artist_event', function(Blueprint $table) {
			$table->dropForeign('artist_event_event_id_foreign');
		});
		Schema::table('links', function(Blueprint $table) {
			$table->dropForeign('links_artist_id_foreign');
		});
		Schema::table('members', function(Blueprint $table) {
			$table->dropForeign('members_adresse_id_foreign');
		});
		Schema::table('function_member', function(Blueprint $table) {
			$table->dropForeign('function_member_member_id_foreign');
		});
		Schema::table('function_member', function(Blueprint $table) {
			$table->dropForeign('function_member_function_id_foreign');
		});
		Schema::table('equipment_event', function(Blueprint $table) {
			$table->dropForeign('equipment_event_event_id_foreign');
		});
		Schema::table('equipment_event', function(Blueprint $table) {
			$table->dropForeign('equipment_event_equipment_id_foreign');
		});
		Schema::table('event_gift', function(Blueprint $table) {
			$table->dropForeign('event_gift_event_id_foreign');
		});
		Schema::table('event_gift', function(Blueprint $table) {
			$table->dropForeign('event_gift_gift_id_foreign');
		});
		Schema::table('event_plateform', function(Blueprint $table) {
			$table->dropForeign('event_plateform_plateform_id_foreign');
		});
		Schema::table('event_plateform', function(Blueprint $table) {
			$table->dropForeign('event_plateform_event_id_foreign');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_group_id_foreign');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_language_id_foreign');
		});
		Schema::table('groups', function(Blueprint $table) {
			$table->dropForeign('groups_iheritance_foreign');
		});
		Schema::table('group_resource', function(Blueprint $table) {
			$table->dropForeign('group_resource_group_id_foreign');
		});
		Schema::table('group_resource', function(Blueprint $table) {
			$table->dropForeign('group_resource_resource_id_foreign');
		});
	}
}