<?php

/**
 * Settings table seeder, creates settings required for an install to function.
 *
 * @author  MyBB Group
 * @version 2.0.0
 * @package mybb/core
 * @license http://www.mybb.com/licenses/bsd3 BSD-3
 */
class SettingsTableSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        DB::table('settings')->delete();

        DB::table('settings')->insert([
            ['name' => 'general.board_name', 'setting_type' => 'string'],
            ['name' => 'general.board_desc', 'setting_type' => 'string'],
            ['name' => 'general.site_name', 'setting_type' => 'string'],
            ['name' => 'general.site_url', 'setting_type' => 'string'],
            ['name' => 'wio.minutes', 'setting_type' => 'number'],
            ['name' => 'wio.refresh', 'setting_type' => 'number'],
            ['name' => 'captcha.method', 'setting_type' => 'choose', 'options' => 'captcha|recaptcha'],
            ['name' => 'captcha.recaptcha_public_key', 'setting_type' => 'string'],
            ['name' => 'captcha.recaptcha_private_key', 'setting_type' => 'string'],
            ['name' => 'captcha.nocaptcha_public_key', 'setting_type' => 'string'],
            ['name' => 'captcha.nocaptcha_private_key', 'setting_type' => 'string'],
            ['name' => 'user.date_format', 'setting_type' => 'string'],
            ['name' => 'user.time_format', 'setting_type' => 'number'],
            ['name' => 'user.timezone', 'setting_type' => 'string'],
            ['name' => 'user.dst', 'setting_type' => 'radio', 'options' => 'enable|disable|auto'],
            ['name' => 'user.follow_started_topics', 'setting_type' => 'checkbox'],
            ['name' => 'user.follow_replied_topics', 'setting_type' => 'checkbox'],
            ['name' => 'user.show_editor', 'setting_type' => 'checkbox'],
            ['name' => 'user.topics_per_page', 'setting_type' => 'number'],
            ['name' => 'user.posts_per_page', 'setting_type' => 'number'],
            ['name' => 'user.style', 'setting_type' => 'string'],
            ['name' => 'user.language', 'setting_type' => 'string'],
            ['name' => 'user.notify_on_like', 'setting_type' => 'checkbox'],
            ['name' => 'user.notify_on_quote', 'setting_type' => 'checkbox'],
            ['name' => 'user.notify_on_reply', 'setting_type' => 'checkbox'],
            ['name' => 'user.notify_on_new_post', 'setting_type' => 'checkbox'],
            ['name' => 'user.notify_on_new_comment', 'setting_type' => 'checkbox'],
            ['name' => 'user.notify_on_comment_like', 'setting_type' => 'checkbox'],
            ['name' => 'user.notify_on_my_comment_like', 'setting_type' => 'checkbox'],
            ['name' => 'user.notify_on_comment_reply', 'setting_type' => 'checkbox'],
            ['name' => 'user.notify_on_my_comment_reply', 'setting_type' => 'checkbox'],
            ['name' => 'user.notify_on_new_message', 'setting_type' => 'checkbox'],
            ['name' => 'user.notify_on_reply_message', 'setting_type' => 'checkbox'],
            ['name' => 'user.notify_on_group_request', 'setting_type' => 'checkbox'],
            ['name' => 'user.notify_on_moderation_post', 'setting_type' => 'checkbox'],
            ['name' => 'user.notify_on_report', 'setting_type' => 'checkbox'],
            ['name' => 'user.notify_on_username_change', 'setting_type' => 'checkbox'],
            ['name' => 'user.notification_mails', 'setting_type' => 'checkbox'],
            ['name' => 'user.showonline', 'setting_type' => 'checkbox'],
            ['name' => 'user.receive_messages', 'setting_type' => 'checkbox'],
            ['name' => 'user.block_blocked_messages', 'setting_type' => 'checkbox'],
            ['name' => 'user.hide_blocked_posts', 'setting_type' => 'checkbox'],
            ['name' => 'user.only_buddy_messages', 'setting_type' => 'checkbox'],
            ['name' => 'user.receive_email', 'setting_type' => 'checkbox'],
            ['name' => 'user.dob_privacy', 'setting_type' => 'radio', 'options' => 'nothing|age|dob'],
            ['name' => 'user.dob_visibility', 'setting_type' => 'radio', 'options' => 'everyone|members|following'],
            ['name' => 'post.likes_to_show', 'setting_type' => 'number'],
            ['name' => 'likes.per_page', 'setting_type' => 'number'],
            ['name' => 'memberlist.sort_by', 'setting_type' => 'choose', 'options' => 'created_at|num_posts|num_topics|name'],
            ['name' => 'memberlist.sort_dir', 'setting_type' => 'choose', 'options' => 'desc|asc'],
            ['name' => 'memberlist.per_page', 'setting_type' => 'number'],
            ['name' => 'conversations.enabled', 'setting_type' => 'switch'],
            ['name' => 'conversations.message_order', 'setting_type' => 'choose', 'options' => 'desc|asc'],
            ['name' => 'warnings.max_points', 'setting_type' => 'number'],
            ['name' => 'warnings.allow_zero', 'setting_type' => 'switch'],
            ['name' => 'warnings.allow_custom', 'setting_type' => 'switch'],
        ]);

        DB::table('setting_values')->insert([
            [
                'setting_id' => DB::table('settings')->where('name', 'general.board_name')->first()->id,
                'value'      => 'MyBB 2.0 Test Install',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'general.board_desc')->first()->id,
                'value'      => 'MyBB 2.0 Test Install',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'general.site_name')->first()->id,
                'value'      => 'MyBB Home',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'general.site_url')->first()->id,
                'value'      => 'http://www.mybb.com',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'wio.minutes')->first()->id,
                'value'      => '15',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'wio.refresh')->first()->id,
                'value'      => '1',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.date_format')->first()->id,
                'value'      => 'default',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.time_format')->first()->id,
                'value'      => 'default',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.timezone')->first()->id,
                'value'      => 'default',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.dst')->first()->id,
                'value'      => '2',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.follow_started_topics')->first()->id,
                'value'      => '1',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.follow_replied_topics')->first()->id,
                'value'      => '1',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.show_editor')->first()->id,
                'value'      => '1',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.topics_per_page')->first()->id,
                'value'      => '20',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.posts_per_page')->first()->id,
                'value'      => '10',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.style')->first()->id,
                'value'      => 'default',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.language')->first()->id,
                'value'      => 'en',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.notify_on_like')->first()->id,
                'value'      => '1',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.notify_on_quote')->first()->id,
                'value'      => '1',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.notify_on_reply')->first()->id,
                'value'      => '1',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.notify_on_new_post')->first()->id,
                'value'      => '1',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.notify_on_new_comment')->first()->id,
                'value'      => '1',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.notify_on_comment_like')->first()->id,
                'value'      => '1',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.notify_on_my_comment_like')->first()->id,
                'value'      => '1',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.notify_on_comment_reply')->first()->id,
                'value'      => '1',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.notify_on_my_comment_reply')->first()->id,
                'value'      => '1',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.notify_on_new_message')->first()->id,
                'value'      => '1',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.notify_on_reply_message')->first()->id,
                'value'      => '1',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.notify_on_group_request')->first()->id,
                'value'      => '1',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.notify_on_moderation_post')->first()->id,
                'value'      => '1',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.notify_on_report')->first()->id,
                'value'      => '1',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.notify_on_username_change')->first()->id,
                'value'      => '1',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.notification_mails')->first()->id,
                'value'      => '0',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.showonline')->first()->id,
                'value'      => '1',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.receive_messages')->first()->id,
                'value'      => '1',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.block_blocked_messages')->first()->id,
                'value'      => '1',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.hide_blocked_posts')->first()->id,
                'value'      => '1',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.only_buddy_messages')->first()->id,
                'value'      => '0',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.receive_email')->first()->id,
                'value'      => '1',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.dob_privacy')->first()->id,
                'value'      => '2',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'user.dob_visibility')->first()->id,
                'value'      => '1',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'post.likes_to_show')->first()->id,
                'value'      => 3,
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'likes.per_page')->first()->id,
                'value'      => 10,
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'memberlist.sort_by')->first()->id,
                'value'      => 'created_at',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'memberlist.sort_dir')->first()->id,
                'value'      => 'asc',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'memberlist.per_page')->first()->id,
                'value'      => 10,
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'conversations.enabled')->first()->id,
                'value'      => 1,
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'conversations.message_order')->first()->id,
                'value'      => 'desc',
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'warnings.max_points')->first()->id,
                'value'      => 10,
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'warnings.allow_zero')->first()->id,
                'value'      => 1,
            ],
            [
                'setting_id' => DB::table('settings')->where('name', 'warnings.allow_custom')->first()->id,
                'value'      => 1,
            ],
        ]);
    }
}
