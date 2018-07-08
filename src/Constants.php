<?php

namespace InstagramAPI;

class Constants
{
    // Core API Constants.
    const API_URLS = [
        1 => 'https://i.instagram.com/api/v1/',
        2 => 'https://i.instagram.com/api/v2/',
    ];
    const IG_VERSION = '42.0.0.19.95';
    const VERSION_CODE = '104766893';
    const IG_SIG_KEY = '673581b0ddb792bf47da5f9ca816b613d7996f342723aa06993a3f0552311c7d';
    const EXPERIMENTS = 'ig_camera_android_badge_face_effects_universe,ig_android_dash_lazy_load_audio,ig_android_stories_landscape_mode,ig_android_direct_blast_lists_universe,ig_android_insights_account_insights_v2_universe,ig_android_direct_expiring_media_view_mode_stickyness_universe,ig_android_realtime_mqtt_logging,ig_branded_content_show_settings_universe,ig_android_stories_server_coverframe,ig_android_ontact_invite_universe,ig_android_ad_async_ads_universe,ig_feed_lockdown,ig_android_direct_vm_activity_sheet,ig_android_startup_prefetch,ig_stories_engagement_2018_h1_holdout_universe,ig_feed_ranking_report_issue,ig_android_live_fault_tolerance_universe,ig_android_move_browser_to_background,ig_android_skip_get_fbupload_photo_universe,ig_android_direct_visual_message_unsend,ig_android_audience_control,ig_android_one_tap_fbshare,ig_android_log_account_switch_usable,ig_android_photo_fbupload_universe,ig_android_carousel_drafts,ig_android_direct_thread_sidebar_send_states,ig_fbns_push,ig_android_sso_family_key,ig_android_live_guest_reshare_universe,ig_android_profile_tabs_redesign_universe,ig_android_profile_view_to_profile_load,ig_android_direct_thread_fix_message_shuffling,ig_android_hide_post_in_feed,ig_search_null_state_universe,ig_android_codec_high_profile,ig_business_growth_holdout_18h1,ig_android_inline_appeal,ig_android_direct_camera_composer_universe,ig_video_use_sve_universe,ig_android_skip_get_fbupload_universe,ig_android_low_data_mode,ig_android_enable_zero_rating,ig_android_force_logout_user_with_mismatched_cookie,ig_android_main_feed_refresh_style_universe,ig_android_reverse_audio,ig_android_memoize_experiment_check,ig_android_fragment_navigator_universe,ig_android_live_encore_production_universe,ig_android_always_parse_pjpeg_universe,ig_android_empty_state_self_follow_list,ig_android_live_dash_latency_viewer,ig_android_http_stack_experiment_2017,ig_promote_independent_ctas_universe,ig_direct_android_24h_visual_perf,ig_android_live_thread_delay_for_mute_universe,ig_android_fb_topsearch_sgp_fork_request,ig_android_heap_uploads,ig_android_stories_archive_universe,ig_business_auto_scroll_to_selected_page,ig_android_global_sampling_perf_uni,ig_android_business_ix_fb_autofill_universe,ig_lockdown_feed_shrink_universe,ig_android_stability_holdout_nametag_leak,ig_android_increase_fd_limit,ig_android_memoize_media_on_viewable,ig_android_log_failed_image_download_retries,ig_profile_holdout_2017_universe,ig_android_explore_feedback_view_stub,ig_android_direct_visual_reply_video_frame_fix,ig_android_live_capture_translucent_navigation_bar,ig_android_stories_drawing_sticker,ig_android_story_reactions,ig_android_video_playback_retry_time_threshold,ig_android_video_delay_auto_start,ig_android_direct_enable_dynamic_shortcuts,ig_android_live_emoji_easter_egg_universe,ig_stories_in_feed_unit_design_universe,ig_android_ads_manager_pause_resume_ads_universe,ig_stories_story_subscription_notification_universe,ig_android_live_heart_color_universe,ig_android_live_video_reactions_consumption_universe,ig_android_prefetch_only_thumbnail,ig_android_live_save_to_camera_roll_universe,ig_android_insights_story_carousel_universe,ig_android_delay_coldstart_logging,ig_android_activity_feed_row_delete,ig_android_unified_inbox,ig_android_show_failed_messages_chronologically,ig_android_profile_grid_preview,ig_android_search_client_matching_2,ig_android_direct_visual_reply_text_mode_background,ig_android_search_bar_quick_back_universe,ig_android_feed_seen_state_with_view_info,ig_android_stories_remove_expired_cached_reels,ig_android_hide_activity_popup_for_bottom_sheet,ig_android_post_recs_hide_from_author_universe,ig_android_background_explore_fetch,ig_android_2018_h1_new_hashtag_page_universe,ig_android_ad_watchlead_universe,ig_android_live_viewer_single_tap_invite_universe,ig_android_direct_prefetch_direct_story_json,ig_android_live_save_to_camera_roll_compatibility_filter_universe,ig_android_comments_inline_composer_in_explore_kill_switch_universe,ig_android_stories_home,ig_android_new_follower_push_notification_to_featured_user,ig_android_fb_profile_integration_universe,ig_android_seen_improvements_universe,ig_android_stories_weblink_creation,ig_android_live_start_broadcast_optimized_universe,ig_android_netgo_cta,ig_android_histogram_reporter,ig_android_comments_inline_expansion_replies_count_universe,ig_android_vc_universe,ig_android_network_cancellation,ig_android_add_to_highlights_universe,ig_android_live_presence_universe,ig_android_search_normalization_recipients,ig_android_video_use_new_logging_arch,ig_auto_login_pop_up_banner,ig_android_lazy_inflate_app_attribution,ig_android_hashtag_following,ig_android_direct_reel_options_entry_point,ig_android_low_data_mode_backup_1,ig_android_insights_candela_charts_universe,ig_android_reactive_feed_like_count,ig_android_stories_highlights_camera_roll_cover_photo,ig_android_direct_visual_reply_gesture_fix,ig_android_stories_asset_search,ig_android_constrain_image_size_universe,ig_android_close_friends_v3,ig_android_stories_archive_fast_scroll,ig_android_camera_retain_face_filter,ig_android_direct_inbox_presence,ig_android_live_skin_smooth,ig_android_qp_features,android_ig_stories_without_storage_permission_universe2,ig_android_reel_raven_video_segmented_upload_universe,ig_android_swipe_navigation_x_angle_universe,ig_android_invite_xout_universe,ig_android_save_all,ig_android_live_report_watch_time_when_update,ig_eof_demarcator_style_universe,ig_android_feed_caption_truncate_universe,ig_android_scroll_perf_bindview_improvements,ig_shopping_post_insights,ig_carousel_animation,ig_android_skip_video_render,ig_promote_guided_screens_universe,ig_android_interactive_listview_during_refresh,ig_android_direct_permanent_media_viewer_loading_flicker_fix,ig_android_post_recs_show_more_button_universe,ig_android_e2e_optimization_universe,ig_android_fix_surface_detach,ig_android_cache_clear_universe,ig_android_livewith_inapp_notification_universe,android_ig_camera_face_tracker_version,ig_android_direct_async_message_row_building_universe,ig_android_instavideo_periodic_notif,ig_android_warm_start_fetch_universe,ig_android_direct_launch_reel_viewer_for_replies,ig_android_comments_permalink_inline_composer_universe,ig_android_direct_mutation_manager_universe,ig_promote_guided_education_bar_universe,ig_android_tap_to_focus_indicator_universe,ig_android_react_native_universe_kill_switch,ig_android_comments_composer_callout_universe,ig_android_story_ads_profile_cta_universe,ig_android_explore_channel_refresh_universe,ig_android_qp_kill_switch,ig_android_fb_unlink_biz_profiles,ig_android_ad_leadgen_single_screen_universe,ig_android_stories_highlights_fast_navigation_universe,ig_android_direct_launch_to_stories_gallery,ig_android_story_ad_media_preload_number_universe,ig_android_react_native_email_sms_settings_universe,ig_android_share_sheets_thread_count,ig_android_loom_universe,ig_android_business_id_conversion_universe,ig_android_business_promote_refresh_fb_access_token_universe,ig_android_vc_incoming_call_screen_universe,ig_android_prominent_live_button_in_camera_universe,ig_android_video_cover_frame_from_original_as_fallback,ig_android_camera_leak_detector_universe,ig_android_story_viewer_linear_preloading_count,ig_stories_end_of_tray_suggestions,ig_promote_reach_destinations_universe,ig_android_betamap_universe,ig_android_direct_fix_retract_notification,ig_promote_clicks_estimate_universe,ig_android_interests_3up_netego_redesign,ig_android_direct_sending_perm_media_flicker_fix,ig_android_direct_visual_reply_tweaks,ig_android_feed_upload_progress,ig_android_live_dash_latency_manager,instagram_interests_holdout,ig_android_user_detail_endpoint,ig_android_shopping_signup,ig_camera_android_segmentation_universe,ig_android_live_save_to_camera_roll_limit_by_screen_size_universe,ig_android_delay_autoplay_check,ig_android_direct_view_mode_toggle,ig_android_offline_story_stickers,ig_end_of_feed_universe,ig_entity_page_holdout_universe,ig_android_direct_mark_unread_universe,ig_android_video_ffmpeg_muxer_universe,ig_promote_unified_audiences_universe,ig_promote_style_update_universe,ig_android_live_follow_from_comments_universe,ig_android_comments_new_like_button_position_universe,ig_android_sidecar_photo_fbupload_universe,ig_android_lazy_set_adapter_inline_composer,ig_android_webrtc_h264_compatibility_filter_universe,ig_android_ad_one_pixel_logging_for_reel_universe,ig_android_direct_camera_text_universe,ig_android_arengine_separate_prepare,ig_android_direct_video_segmented_upload_universe,ig_android_direct_visual_history,ig_android_prefetch_queue_front,ig_android_insights_account_insight_v3_2_universe,ig_android_xshare_feed_post,ig_android_direct_fix_video_prefetch,ig_android_rtc_reshare,ig_android_nametag,ig_android_reel_cta_new_design_universe,ig_fbns_preload_default,ig_android_cover_frame_blacklist,ig_android_use_iterative_box_blur,ig_camera_android_logging_universe,ig_android_live_encore_consumption_settings_universe,ig_android_stories_separate_overlay_creation,ig_android_enable_liger_preconnect_universe,ig_android_vod_abr_universe,ig_android_audience_profile_icon_badge,ig_android_live_encore_reel_chaining_universe,ig_android_world_effects,ig_android_hashtag_feed_tabbed,ig_android_stories_story_rings_comments_universe,ig_android_direct_permissions_inbox_expanded_instructions,ig_android_video_decoder_retry,ig_android_enable_main_feed_reel_tray_preloading,ig_android_camera_upsell_dialog,ig_android_direct_thread_custom_item_animator,ig_android_story_ad_link_universe,ig_android_internal_research_settings,ig_android_prod_lockout_universe,ig_android_camera_color_filter_nux_universe,ig_android_fb_family_navigation_badging_user,ig_android_low_content_follow_list_su,ig_android_comments_activity_feed_playground,ig_android_video_scrubber_thumbnail_universe,ig_android_recalculate_badge_count_on_disk_load,ig_lockdown_feed_caption_length_universe,ig_stories_music_sticker,ig_android_fb_auth_token_retriever,ig_android_low_data_mode_backup_5,ig_android_post_live_expanded_comments_view_universe,ig_android_stories_video_prefetch_kb,ig_business_skip_page_creation_universe,ig_android_live_stop_broadcast_on_404,ig_android_scroll_perf_cta_binder_color_holder,ig_android_prepare_video_on_start_universe,ig_android_render_iframe_interval,ig_android_live_move_video_with_keyboard_universe,ig_android_share_sheet_auto_crossposting_dialog,ig_android_live_face_filter,ig_android_no_cancel_launching_reel_when_scroll_universe,ig_story_camera_reverse_video_experiment,ig_downloadable_modules_experiment,ig_android_felix,ig_android_reduce_background_overdraw,ig_android_archive_features_holdout_universe,ig_android_find_loaded_classes,ig_promote_budget_duration_slider_universe,ig_android_camera_universe,ig_android_insights_creative_tutorials_universe,ig_save_android_dual_action_upsell,ig_hashtag_following_holdout_universe,ig_android_camera_post_smile_universe,ig_android_explore_universe,ig_android_experimental_filters,ig_android_live_comment_fetch_frequency_universe,ig_android_remove_qpl_perf_event,ig_android_prefetch_ahead_main_feed,ig_shopping_viewer_share_action,ig_android_direct_log_badge_count_inconsistent,ig_android_livewith_universe,ig_android_stories_viewer_nux,ig_android_reel_ads_pagination_universe,ig_android_activity_feed_impression_logger,ig_android_live_align_by_2_universe,ig_android_reorder_lowdata_check,ig_android_network_util_cache_info,ig_android_async_network_tweak_universe_15,ig_android_direct_thread_presence,ig_android_direct_init_post_launch,ig_android_camera_new_early_show_smile_icon_universe,ig_android_lazy_inflate_inline_comment_composer_v1,ig_android_upload_prevent_upscale,ig_android_auto_advance_su_unit_when_scrolled_off_screen,ig_android_business_ix_universe,ig_android_shopping_pdp_related_posts,ig_android_live_comment_typing_indicator_production_universe,ig_android_stories_gallery_long_term_holdout,ig_android_stories_highlights_permalink,ig_android_business_new_navigation_universe,ig_android_stories_text_format_emphasis,ig_android_explore_post_chaining_cache,ig_android_hashtags_in_feed_posts,ig_android_live_request_to_join_production_universe,ig_android_video_resize_operation,ig_android_scroll_away_navigator,ig_android_story_video_subtitle_universe,ig_android_gallery_ui_improvements,ig_android_direct_inbox_camera_variant,ig_android_direct_story_reshare_on_mention,ig_android_stories_whatsapp_share,ig_android_low_data_mode_backup_2,ig_android_story_resharing_universe,ig_android_direct_share_story_to_facebook,ig_android_stories_music_overlay,ig_android_exoplayer_creation_flow,ig_android_video_segmented_upload_multi_thread_universe,ig_android_fbupload_sidecar_video_universe,ig_mi_android_main_feed_impression_universe,ig_android_react_native_restart_after_error_universe,ig_android_profile,ig_android_additional_contact_in_nux,ig_android_disk_usage_universe_v2,ig_android_anr_watchdog_uni,ig_android_story_reactions_producer_holdout,ig_android_live_use_rtc_upload_universe,ig_main_activity_cold_start,ig_stories_holdout_h1_2018,ig_android_directapp_inbox_first,ig_android_insights_metrics_graph_universe,ig_android_live_view_profile_from_comments_universe,ig_fbns_blocked,ig_android_share_highlights_to_direct,ig_android_comments_ranking_toggle_universe,ig_android_cache_logger_video,ig_android_suggest_password_reset_on_oneclick_login,ig_android_biz_auto_slide_props,ig_android_direct_rich_text_mode_formats,ig_android_stories_story_rings_liker_list_universe,android_ig_fbns_kill_switch,ig_android_shopping_destination,ig_android_branded_content_brand_remove_self,ig_android_ad_show_full_name_universe,ig_android_audio_segment_report_info,ig_android_scroll_main_feed,ig_business_integrity_ipc_universe,ig_android_background_main_feed_fetch_v27,ig_android_skywalker_live_event_start_end,ig_android_interests_irrelevant_media_universe,ig_android_carousel_view_stubs,ig_android_fci_empty_feed_friend_search,ig_android_video_qp_logger_universe,ig_android_one_tap_upsell_redesign,ig_android_ar_effects_button_display_timing,ig_android_audience_control_nux,ig_internal_ui_for_lazy_loaded_modules_experiment,ig_android_stories_sampled_progress,ig_android_contact_invite_crash_fix,ig_android_ccu_jobscheduler_outer,ig_android_stories_viewer_modal_activity,ig_android_fbns_preload_direct_universe,ig_android_activity_feed_row_click,ig_android_gl_drawing_marks_after_undo_backing,ig_android_live_monotonic_pts,ig_android_ad_pbia_header_click_universe,ig_android_story_screenshot_attribution,ig_android_insights_holdout,ig_feed_engagement_holdout_2018_h1,ig_use_fb_rtmp_streamer_universe,ig_android_media_sticker_width_ratio,ig_android_direct_share_sheet_presence,ig_promote_guided_creation_flow,ig_android_draw_chalk_client_universe,ig_android_separate_network_executor,ig_android_video_segment_ffmpeg_muxer_universe,ig_android_universe_video_production,ig_android_iig_dialog_contact_permission,ig_android_direct_presence_digest_remove_time,ig_android_live_analytics,ig_android_direct_mutation_manager_universe_v2,ig_android_direct_fix_new_message_indicator,ig_android_bitmap_compress_retry_universe,ig_promote_guided_budget_duration_options_universe,ig_android_verified_comments_universe,ig_android_direct_sidebar_send_states_rollout,ig_android_dash_script,ig_android_media_pipeline_frame_listener_universe,ig_shopping_viewer_intent_actions,ig_android_gallery_order_by_date_taken,ig_android_live_640_quality,ig_android_custom_story_import_intent,ig_lockdown_feed_perf,ig_video_copyright_whitelist,ig_explore_holdout_universe,ig_android_ppr_main_feed_enhancements_v36,ig_android_fbc_upsell_on_dp_first_load,ig_android_device_language_reset,ig_android_direct_inbox_presence_visibility,ig_android_stories_viewer_use_thumbnail_as_fallback,ig_android_comments_remove_hashtag_search_limit_universe,ig_biz_growth_entry_value,ig_android_direct_visual_message_loading_cancel_fix,ig_android_live_viewer_reshare_universe,ig_android_livewith_guest_adaptive_camera_universe,ig_android_business_new_ads_payment_universe,ig_android_live_encore_camera_pivot_universe,ig_android_insights_account_insights_v3_universe,ig_android_bug_report_version_warning,ig_android_disable_save_bitmap,ig_android_carousel_no_buffer_10_30,ig_android_user_url_deeplink_fbpage_endpoint,ig_android_direct_permanent_video_store_in_internal_storage,ig_android_ad_watchbrowse_universe,ig_android_live_pivot_to_reshare_universe,ig_company_profile_holdout,ig_android_log_mediacodec_info,ig_android_direct_thread_subtitle_universe,ig_android_init_main_feed_seen_state_store_earlier_universe,ig_android_direct_expiring_media_loading_errors,ig_android_smartisan_app_badging,ig_android_direct_expiring_media_fix_duplicate_thread,ig_android_stories_viewer_bitmap_holder,ig_promote_split_objectives_universe,ig_android_stories_create_flow_favorites_tooltip,ig_android_stories_text_format,ig_android_direct_ephemeral_replies_with_context,ig_android_explore_in_feed_universe,ig_android_direct_send_new_combined_reshare,ig_android_direct_bugreport_from_message_failures,ig_android_vc_ongoing_call_notification_universe,ig_android_stories_paging_spring_config_v1_universe,ig_fb_notification_universe,ig_android_facebook_twitter_profile_photos,ig_android_story_decor_image_fbupload_universe,ig_android_stories_close_to_left_head,ig_android_hero_player_settings,ig_android_live_with_invite_sheet_search_universe,ig_promote_ppe_v2_universe,ig_android_stories_archive_calendar,ig_android_effect_download_progress_universe,ig_android_direct_inbox_camera_with_text_mode,ig_android_ad_watchbrowse_cta_universe,ig_android_realtime_iris,ig_android_nametag_in_stories_camera,ig_android_invited_disabled_look,ig_android_main_feed_fragment_scroll_timing_histogram_uni,ig_promote_interim_insights_v2_universe,ig_lockdown_notifications_universe,ig_android_location_feed_related_business,ig_promote_audience_selection_universe,ig_android_media_rows_prepare_10_31,ig_family_bridges_holdout_universe,ig_android_business_ix_self_serve,ig_android_insta_video_consumption_infra,ig_android_video_segment_resume_policy_universe,ig_android_igsystrace_universe,ig_camera_android_ar_effect_deeplink_universe,ig_android_insights_account_insight_remote_assets_universe,ig_android_stories_story_rings_activity_feed_universe,ig_android_dash_for_vod_universe,ig_android_low_content_nux_ci_show_su,ig_promote_daily_budget_universe,ig_android_stories_camera_enhancements,ig_android_feed_stale_check_interval,ig_android_stories_gallery_improvements,ig_android_bg_wifi_prefetching_universe,ig_android_prefetch_notification_data,ig_android_direct_double_tap_to_like_raven_universe,ig_android_direct_full_size_gallery_upload_universe_v2,ig_android_direct_app_deeplinking,ig_android_story_dynamic_text_size_universe,ig_android_mqtt_delay_stop_after_background_universe,ig_promotions_unit_in_insights_landing_page,ig_camera_ar_image_transform_library,ig_android_comments_composer_newline_universe,ig_android_stories_gif_sticker,ig_android_test_only_do_not_remove,ig_android_live_comment_composer_animation_universe,ig_android_stories_posting_offline_ui,ig_android_canvas_swipe_to_open_universe,ig_android_comments_inline_composer_new_ui_universe,ig_android_offline_mode_holdout,ig_android_live_send_user_location,ig_android_family_bridge_discover,ig_android_startup_manager,instagram_search_and_coefficient_holdout,ig_android_high_res_upload_2,ig_android_camera_sdk_check_gl_surface_r2,ig_android_http_service_same_thread,ig_android_scroll_to_dismiss_keyboard,ig_android_direct_permanent_media_failure_state_fix,ig_android_remove_followers_universe,ig_android_crash_native_core_dumping,ig_profile_holdout_universe,ig_android_server_account_linkage_sync,ig_android_direct_thread_composer_send,ig_android_cache_autoplay_check,ig_android_post_capture_filter,ig_android_rendering_controls,ig_android_os_version_blocking,ig_android_no_prefetch_video_bandwidth_threshold,ig_promote_fix_expired_fb_accesstoken_android_universe,ig_android_encoder_width_safe_multiple_16,ig_android_stories_combined_asset_search,ig_android_live_comment_typing_indicator_consumption_universe,ig_android_request_feed_on_back,ig_android_unfollow_from_main_feed_v2,ig_android_direct_one_tap_everywhere,ig_android_stories_engagement_perf_universe,ig_android_live_encore_scrubber_universe,ig_android_swipe_navigation_nested_scrolling_parent,ig_android_fb_connect_follow_invite_flow,ig_android_video_stitch_after_segmenting_universe,ig_android_enable_swipe_to_dismiss_for_all_dialogs,ig_android_marauder_update_frequency,ig_android_rage_shake_whitelist,ig_android_low_data_mode_backup_4,ig_android_show_message_button_on_featured_user_page,ig_android_direct_inbox_filter_universe,ig_android_shopping_report_as_scam,ig_android_shopping_pdp_craft,ig_android_ad_connection_manager_universe,ig_android_reset_to_feed_from_background,ig_android_ad_watchbrowse_carousel_universe,ig_android_branded_content_edit_flow_universe,ig_android_video_feed_universe,ig_android_upload_reliability_universe,ig_android_delay_product_tag_indicator_inflate,ig_android_arengine_bypass_pipeline_during_warmup_universe,ig_android_live_disable_speed_test_ui_timeout_universe,ig_android_hashtag_page_reduced_related_items,ig_android_stories_feed_unit_scroll_perf_universe,ig_android_stability_holdout_2018,ig_android_ad_switch_fragment_logging_v2_universe,ig_android_seen_state_contains_check,ig_branded_content_share_to_facebook,ig_android_live_dash_latency_broadcaster,ig_android_move_qpl_to_ig_perf,ig_android_shopping_pdp_from_the_community,ig_android_camera_ui_perf_universe,ig_promote_unified_insights_universe,ig_android_global_prefetch_scheduler,ig_android_capture_slowmo_mode,ig_android_progressive_jpeg_partial_download,ig_fbns_shared,ig_android_direct_use_selected_recipients_new_group,ig_android_live_ff_fill_gap,ig_comments_h1_2018_team_holdout_universe,ig_android_video_single_surface,ig_android_highlights_spacer_tray_universe,ig_android_foreground_location_collection,ig_android_pending_actions_serialization,ig_android_image_cache_tweak_for_n,ig_android_direct_increased_notification_priority,ig_android_hero_player,ig_android_igds_icons,ig_android_unified_video_logger,ig_android_ad_watchmore_entry_point_universe,ig_android_video_detail,ig_android_low_latency_consumption_universe,ig_live_holdout_h1_2018,ig_comments_typing_universe,ig_android_exoplayer_settings,ig_android_user_detail_action_bar_force_update_npe_fix,ig_android_scheduled_executor,ig_android_fblocation_universe,ig_android_video_prefetch_for_connectivity_type,ig_android_ad_holdout_watchandmore_universe,ig_android_insta_video_abr_resize,ig_android_insta_video_sound_always_on,ig_suggested_invite_hide,ig_android_in_app_notifications_queue,ig_android_live_request_to_join_consumption_universe,ig_android_ix_payment_universe,ig_android_split_contacts_list,ig_vc_holdout_universe,ig_android_hyperzoom,ig_android_live_broadcast_blacklist,ig_android_time_separator_in_thread_universe,ig_promote_reachbar_universe,ig_android_reel_viewer_fetch_missing_reels_universe,ig_android_video_webrtc_textureview,ig_android_fix_livevod_prefetch,ig_android_direct_search_share_sheet_universe,ig_android_business_promote_tooltip,ig_android_draw_rainbow_client_universe,ig_business_one_click_conversion_universe,ig_android_enable_swipe_to_dismiss_for_favorites_dialogs,ig_android_auto_retry_post_mode,ig_android_comments_composer_new_ui_universe,ig_android_gallery_high_quality_photo_thumbnails,ig_android_video_upload_quality_avoid_degradation,ig_android_gallery_multi_select,ig_perf_android_holdout,ig_direct_core_holdout_q1_2018,ig_android_biz_prefill_contact_universe,ig_android_list_redesign,ig_android_search_normalization,ig_android_su_rows_preparer,ig_android_direct_read_badge_count_from_direct_app,ig_android_video_loopcount_int,ig_android_direct_forward_messages_universe,ig_android_cover_frame_rendering,ig_android_qp_sticky_exposure_universe,ig_camera_android_segmentation_enabled_universe,ig_android_upload_retry_job_service,ig_android_live_time_adjustment_universe,ig_android_stories_better_error_state_handling,ig_android_react_native_ota,ig_camera_facetracker_bufferpool_1,ig_business_conversion_entrypoint_setting_position_experiment,ig_android_low_data_mode_backup_3,android_ig_camera_ar_asset_manager_improvements_universe,ig_android_activity_feed_see_all_su,ig_android_qcc_perf,ig_android_scroll_perf_lazy_holder,ig_media_geo_gating,ig_android_media_as_sticker,ig_business_category_universe,ig_android_video_watermark_universe,ig_android_giphy_content_rating,ig_android_sc_ru_ig,ig_android_insights_story_insights_v2_universe,ig_android_warm_headline_text,ig_android_new_block_flow,ig_android_long_form_video,ig_camera_android_segmentation_optimizations_universe,ig_android_direct_vibrate_notification,android_face_filter_universe,ig_android_fb_jobscheduler,ig_android_webrtc_codec_migration_universe,ig_android_stories_server_brushes,ig_android_collections_cache,ig_android_stories_disable_highlights_media_preloading,ig_android_aymt_insight_universe,ig_android_logging_metric_universe_v2,ig_android_screen_recording_bugreport_universe,ig_android_stories_exif_photo_location,ig_android_original_video_report_info,ig_stories_holdout_h2_2017,ig_android_video_server_coverframe,ig_android_stories_story_rings_viewer_list_universe,ig_promote_relay_modern,ig_android_video_controls_universe,ig_qp_tooltip,ig_camera_holdout_h1_2018_performance,ig_android_allow_reshare_setting,ig_android_inappnotification_rootactivity_tweak,ig_android_live_encore_consumption_universe,ig_camera_holdout_h1_2018_product,ig_show_sent_confirmation_after_sending_text_replies_universe,ig_timestamp_public_test,ig_android_direct_fix_double_spinner_in_inbox,ig_android_main_activity,ig_android_business_conversion_value_prop_v2,ig_android_live_wave_production_universe,ig_android_nametag_dark_launch_universe,ig_android_directapp_reset_to_camera_universe,ig_android_shopping_hide_price_in_tag,ig_android_whatsapp_invite_option,ig_android_obtain_byte_array_only_if_needed_universe,ig_android_video_no_proxy,ig_android_story_ad_share_universe,ig_android_hashtag_search_suggestions,ig_android_experiment_list_lazy_universe,ig_android_stories_story_rings_follow_list_universe,ig_android_leak_detector_upload_universe,ig_android_impression_tracker_scope_universe,ig_android_auto_select_face_filter_universe,ig_android_ad_lightweight_in_app_browser,ig_android_save_upsell_timing,ig_android_live_bg_download_face_filter_assets_universe,ig_camera_android_format_picker_initialization_universe,ig_android_video_segmented_media_needs_reupload_universe,ig_android_insta_video_audio_encoder,ig_android_newsfeed_list_row_redesign,ig_stories_abr_android_universe,ig_android_self_story_layout,ig_android_log_su_impression_with_zero_latency,ig_android_direct_fix_thread_animations,ig_android_stories_low_res_photo_resize_fix,ig_android_live_with_bluetooth_headset_support_universe,ig_android_background_prefetch_cellular,ig_android_interactive_slider,ig_android_explore_autoplay_use_less_data_universe,ig_android_stories_viewer_perf_universe,ig_android_disable_explore_prefetch,ig_android_universe_reel_video_production,ig_android_react_native_push_settings_refactor_universe,ig_android_power_metrics,ig_android_show_option_page_before_refactoring,ig_direct_quality_lockdown_holdout_2018,ig_android_ad_collection_thumbnail_cta_universe,ig_android_direct_aggregate_notification_on_threads_universe,ig_android_bitmap_cache_executor_size,ig_android_direct_log_badge_count,ig_android_non_square_first,ig_android_keep_screen_on_worker_thread,ig_android_reel_viewer_data_buffer_size,ig_promote_political_ads_universe,ig_android_search_logging,ig_android_effect_tray_background,ig_android_disable_scroll_listeners,ig_android_direct_reshare_button_tap_sampling_uni,ig_stories_selfie_sticker,ig_android_stories_reply_composer_redesign,ig_android_video_upload_quality_qe1,ig_android_audience_control_sharecut_universe,ig_android_comments_pia_refactor,ig_android_direct_fix_thread_pagination_scroll_position,ig_android_live_nerd_stats_universe,ig_android_video_cache_size_universe,ig_android_profile_slideout_menu_universe,ig_android_hands_free_rename_and_reorder,ig_direct_pending_inbox,ig_video_holdout_h2_2017,ig_android_story_ad_long_caption_universe,ig_android_direct_share_sheet_custom_fast_scroller,ig_android_one_tap_send_sheet_universe,ig_android_live_see_fewer_videos_like_this_universe,ig_android_international_add_payment_flow_universe,ig_challenge_delta_ui_tweaks,ig_android_video_segmented_upload_universe,ig_android_direct_new_thread_header,ig_perf_android_holdout_2018_h1,ig_android_live_special_codec_size_list,ig_android_view_info_universe,ig_android_story_viewer_item_duration_universe,android_ig_camera_clear_metadata_after_switch_account,ig_android_startup_sampling_rate_universe,promote_media_picker,ig_android_live_video_reactions_creation_universe,ig_android_swipe_seen_unseen,ig_android_story_import_intent,ig_android_insta_video_broadcaster_infra_perf,ig_android_live_webrtc_livewith_params,ig_android_direct_thread_visual_message_sending_behavior,ig_android_self_update_in_prod_uni,ig_android_explore_post_chaining_prefetch,business_signup_flow_on_android,ig_android_unparsed_traces_uni,ig_android_direct_speed_cam_univ,ig_android_all_videoplayback_persisting_sound,ig_android_live_pause_upload,ig_android_live_broadcaster_reshare_universe,ig_android_share_sheet_highlight_universe,ig_android_direct_search_recipients_controller_universe,ig_android_stories_gallery_sticker,ig_android_2fac,ig_android_archived_posts_sharing,ig_direct_bypass_group_size_limit_universe,ig_lockdown_feed_perf_image_cover,ig_android_direct_search_story_recipients_universe,ig_android_fb_sharing_shortcut,ig_android_grid_cell_count,ig_android_ad_watchinstall_universe,ig_android_shortcuts,ig_android_comments_notifications_universe,ig_android_archive_fetching,ig_android_new_optic,ig_android_vc_webrtc_params,ig_android_canvas_tilt_to_pan_universe,ig_android_feed_sharing_memory_leak,ig_android_direct_expiring_media_from_notification_behavior_universe,ig_android_stories_sound_on_sticker,ig_android_ad_account_top_followers_universe,ig_android_offline_reel_feed,ig_android_user_behavior_prefetch,ig_android_feed_post_sticker,ig_android_facebook_crosspost,ig_android_mark_seen_state_on_viewed_impression,ig_android_configurable_retry,ig_android_direct_realtime_polling,ig_business_profile_18h1_holdout_universe,ig_android_nearby_venues_location_timeout_fallback,ig_android_follow_request_push_notification_to_follow_requests,ig_android_show_rearranged_option_page,ig_branded_content_tagging_upsell,ig_android_direct_feed_reshare_migration,ig_android_ccu_jobscheduler_inner,ig_android_explore_chaining_universe,ig_android_direct_instant_record,ig_android_gqls_typing_indicator,ig_android_direct_show_inbox_loading_banner_universe,ig_ads_increase_connection_step2_v2,ig_android_direct_permanent_photo_screenshot_quality_fix,ig_android_direct_keep_in_chat_ephemeral';
    const LOGIN_EXPERIMENTS = 'ig_android_updated_copy_user_lookup_failed,ig_growth_android_profile_pic_prefill_with_fb_pic_2,ig_android_hsite_prefill_new_carrier,ig_android_me_profile_prefill_in_reg,ig_android_allow_phone_reg_selectable,ig_android_background_voice_phone_confirmation_prefilled_phone_number_only,ig_android_gmail_oauth_in_reg,ig_android_access_redesign_v2,ig_android_run_account_nux_on_server_cue_device,ig_android_make_sure_next_button_is_visible_in_reg,ig_android_report_nux_completed_device,ig_android_sim_info_upload,ig_android_background_voice_confirmation_block_argentinian_numbers,ig_android_reg_nux_headers_cleanup_universe,ig_android_reg_omnibox,ig_android_background_phone_confirmation_v2,ig_android_email_one_tap_auto_login_during_reg,ig_android_background_voice_phone_confirmation,ig_android_password_toggle_on_login_universe_v2,ig_android_skip_signup_from_one_tap_if_no_fb_sso,ig_android_refresh_onetap_nonce,ig_android_multi_tap_login,ig_challenge_kill_switch,ig_android_run_device_verification,ig_android_modularized_nux_universe_device,ig_android_account_recovery_auto_login,ig_android_onetaplogin_login_upsell,ig_android_onboarding_skip_fb_connect,ig_restore_focus_on_reg_textbox_universe,ig_android_abandoned_reg_flow,ig_android_phoneid_sync_interval,ig_android_smartlock_hints_universe,ig_android_2fac_auto_fill_sms_universe,ig_android_onetaplogin_optimization,ig_android_family_apps_user_values_provider_universe,ig_android_security_intent_switchoff,ig_android_direct_inbox_account_switching,ig_client_logging_efficiency,ig_android_show_password_in_reg_universe,ig_android_fci_onboarding_friend_search,ig_android_ui_cleanup_in_reg_v2,ig_android_login_bad_password_autologin_universe,ig_android_editable_username_in_reg,ig_android_account_switch_optimization,ig_android_rtl_password_hint,ig_android_device_sms_retriever_plugin_universe,ig_android_phone_auto_login_during_reg';
    const SIG_KEY_VERSION = '4';

    // User-Agent Constants.
    const USER_AGENT_LOCALE = 'en_US'; // "language_COUNTRY".

    // HTTP Protocol Constants.
    const ACCEPT_LANGUAGE = 'en-US'; // "language-COUNTRY".
    const ACCEPT_ENCODING = 'gzip,deflate';
    const CONTENT_TYPE = 'application/x-www-form-urlencoded; charset=UTF-8';
    const X_FB_HTTP_Engine = 'Liger';
    const X_IG_Connection_Type = 'WIFI';
    const X_IG_Capabilities = '3brTPw==';

    // Supported Capabilities
    const SUPPORTED_CAPABILITIES = [
        [
            'name'    => 'SUPPORTED_SDK_VERSIONS',
            'value'   => '9.0,10.0,11.0,12.0,13.0,14.0,15.0,16.0,17.0,18.0,19.0,20.0,21.0,22.0,23.0,24.0,25.0,26.0,27.0,28.0,29.0,30.0,31.0,32.0,33.0,34.0,35.0,36.0,37.0,38.0,39.0',
        ],
        [
            'name'  => 'FACE_TRACKER_VERSION',
            'value' => '10',
        ],
        [
            'name'  => 'segmentation',
            'value' => 'segmentation_enabled',
        ],
        [
            'name'  => 'WORLD_TRACKER',
            'value' => 'WORLD_TRACKER_ENABLED',
        ],
    ];

    // Facebook Constants.
    const FACEBOOK_OTA_FIELDS = 'update%7Bdownload_uri%2Cdownload_uri_delta_base%2Cversion_code_delta_base%2Cdownload_uri_delta%2Cfallback_to_full_update%2Cfile_size_delta%2Cversion_code%2Cpublished_date%2Cfile_size%2Cota_bundle_type%2Cresources_checksum%7D';
    const FACEBOOK_ORCA_PROTOCOL_VERSION = 20150314;
    const FACEBOOK_ORCA_APPLICATION_ID = '124024574287414';
    const FACEBOOK_ANALYTICS_APPLICATION_ID = '567067343352427';

    // MQTT Constants.
    const PLATFORM = 'android';
    const FBNS_APPLICATION_NAME = 'MQTT';
    const INSTAGRAM_APPLICATION_NAME = 'Instagram';
    const PACKAGE_NAME = 'com.instagram.android';

    // Instagram Quick Promotions.
    const SURFACE_PARAM = [
        4715,
        5734,
    ];

    // Internal Feedtype Constants. CRITICAL: EVERY value here MUST be unique!
    const FEED_TIMELINE = 1;
    const FEED_TIMELINE_ALBUM = 2;
    const FEED_STORY = 3;
    const FEED_DIRECT = 4;
    const FEED_DIRECT_STORY = 5;
    const FEED_TV = 6;

    // General Constants.
    const SRC_DIR = __DIR__; // Absolute path to the "src" folder.
}
