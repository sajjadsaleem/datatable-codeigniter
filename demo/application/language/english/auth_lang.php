<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Auth Lang - English
*
* Author: Ben Edmunds
* 		  ben.edmunds@gmail.com
*         @benedmunds
*
* Author: Daniel Davis
*         @ourmaninjapan
*
* Location: http://github.com/benedmunds/ion_auth/
*
* Created:  03.09.2013
*
* Description:  English language file for Ion Auth example views
*
*/

// Errors
$lang['error_csrf'] = 'This form post did not pass our security checks.';

// Login
$lang['login_heading']         = 'LogIn';
$lang['login_subheading']      = 'Please login with your email/username and password below.';
$lang['login_identity_label']  = 'Email';
$lang['login_password_label']  = 'Password:';
$lang['login_remember_label']  = 'Remember Me:';
$lang['login_submit_btn']      = 'Sign in to your account';
$lang['login_forgot_password'] = 'Forgot your password?';

// Index
$lang['index_heading']           = 'Users';
$lang['index_subheading']        = 'Below is a list of the users.';
$lang['index_fname_th']          = 'First Name';
$lang['index_lname_th']          = 'Last Name';
$lang['index_email_th']          = 'Email';
$lang['index_groups_th']         = 'Groups';
$lang['index_status_th']         = 'Status';
$lang['index_action_th']         = 'Action';
$lang['index_active_link']       = 'Active';
$lang['index_inactive_link']     = 'Inactive';
$lang['index_create_user_link']  = 'Create a new user';
$lang['index_create_group_link'] = 'Create a new group';

// Deactivate User
$lang['deactivate_heading']                  = 'Deactivate User';
$lang['deactivate_subheading']               = 'Are you sure you want to deactivate the user \'%s\'';
$lang['deactivate_confirm_y_label']          = 'Yes:';
$lang['deactivate_confirm_n_label']          = 'No:';
$lang['deactivate_submit_btn']               = 'Submit';
$lang['deactivate_validation_confirm_label'] = 'confirmation';
$lang['deactivate_validation_user_id_label'] = 'user ID';

// Create User
$lang['create_user_heading']                           = 'Create User';
$lang['create_user_subheading']                        = 'Please enter the user\'s information below.';
$lang['create_user_fname_label']                       = 'First Name:';
$lang['create_user_lname_label']                       = 'Last Name:';
$lang['create_user_company_label']                     = 'Company Name:';
$lang['create_user_email_label']                       = 'Email:';
$lang['create_user_phone_label']                       = 'Phone:';
$lang['create_user_password_label']                    = 'Password:';
$lang['create_user_password_confirm_label']            = 'Confirm Password:';
$lang['create_user_submit_btn']                        = 'Create User';
$lang['create_user_validation_fname_label']            = 'First Name';
$lang['create_user_validation_lname_label']            = 'Last Name';
$lang['create_user_validation_email_label']            = 'Email Address';
$lang['create_user_validation_phone1_label']           = 'First Part of Phone';
$lang['create_user_validation_phone2_label']           = 'Second Part of Phone';
$lang['create_user_validation_phone3_label']           = 'Third Part of Phone';
$lang['create_user_validation_company_label']          = 'Company Name';
$lang['create_user_validation_password_label']         = 'Password';
$lang['create_user_validation_password_confirm_label'] = 'Password Confirmation';

// Edit User
$lang['edit_user_heading']                           = 'Edit User';
$lang['edit_user_subheading']                        = 'Please enter the user\'s information below.';
$lang['edit_user_fname_label']                       = 'First Name:';
$lang['edit_user_lname_label']                       = 'Last Name:';
$lang['edit_user_company_label']                     = 'Company Name:';
$lang['edit_user_email_label']                       = 'Email:';
$lang['edit_user_phone_label']                       = 'Phone:';
$lang['edit_user_password_label']                    = 'Password: (if changing password)';
$lang['edit_user_password_confirm_label']            = 'Confirm Password: (if changing password)';
$lang['edit_user_groups_heading']                    = 'Member of groups';
$lang['edit_user_submit_btn']                        = 'Save User';
$lang['edit_user_validation_fname_label']            = 'First Name';
$lang['edit_user_validation_lname_label']            = 'Last Name';
$lang['edit_user_validation_email_label']            = 'Email Address';
$lang['edit_user_validation_phone1_label']           = 'First Part of Phone';
$lang['edit_user_validation_phone2_label']           = 'Second Part of Phone';
$lang['edit_user_validation_phone3_label']           = 'Third Part of Phone';
$lang['edit_user_validation_company_label']          = 'Company Name';
$lang['edit_user_validation_groups_label']           = 'Groups';
$lang['edit_user_validation_password_label']         = 'Password';
$lang['edit_user_validation_password_confirm_label'] = 'Password Confirmation';

// Create Group
$lang['create_group_title']                  = 'Create Group';
$lang['create_group_heading']                = 'Create Group';
$lang['create_group_subheading']             = 'Please enter the group information below.';
$lang['create_group_name_label']             = 'Group Name:';
$lang['create_group_desc_label']             = 'Description:';
$lang['create_group_submit_btn']             = 'Create Group';
$lang['create_group_validation_name_label']  = 'Group Name';
$lang['create_group_validation_desc_label']  = 'Description';

// Edit Group
$lang['edit_group_title']                  = 'Edit Group';
$lang['edit_group_saved']                  = 'Group Saved';
$lang['edit_group_heading']                = 'Edit Group';
$lang['edit_group_subheading']             = 'Please enter the group information below.';
$lang['edit_group_name_label']             = 'Group Name:';
$lang['edit_group_desc_label']             = 'Description:';
$lang['edit_group_submit_btn']             = 'Save Group';
$lang['edit_group_validation_name_label']  = 'Group Name';
$lang['edit_group_validation_desc_label']  = 'Description';

// Change Password
$lang['change_password_heading']                               = 'Change Password';
$lang['change_password_old_password_label']                    = 'Old Password:';
$lang['change_password_new_password_label']                    = 'New Password (at least %s characters long):';
$lang['change_password_new_password_confirm_label']            = 'Confirm New Password:';
$lang['change_password_submit_btn']                            = 'Change';
$lang['change_password_validation_old_password_label']         = 'Old Password';
$lang['change_password_validation_new_password_label']         = 'New Password';
$lang['change_password_validation_new_password_confirm_label'] = 'Confirm New Password';

// Forgot Password
$lang['forgot_password_heading']                 = 'Forgot Password';
$lang['forgot_password_subheading']              = 'Please enter your %s so we can send you an email to reset your password.';
$lang['forgot_password_email_label']             = '%s:';
$lang['forgot_password_submit_btn']              = 'Submit';
$lang['forgot_password_validation_email_label']  = 'Email Address';
$lang['forgot_password_username_identity_label'] = 'Username';
$lang['forgot_password_email_identity_label']    = 'Email';
$lang['forgot_password_email_not_found']         = 'No record of that email address.';

// Reset Password
$lang['reset_password_heading']                               = 'Change Password';
$lang['reset_password_new_password_label']                    = 'New Password (at least %s characters long):';
$lang['reset_password_new_password_confirm_label']            = 'Confirm New Password:';
$lang['reset_password_submit_btn']                            = 'Change';
$lang['reset_password_validation_new_password_label']         = 'New Password';
$lang['reset_password_validation_new_password_confirm_label'] = 'Confirm New Password';

// hom page
$lang['home_heading']                   = 'Home';
$lang['our_models_heading']             = 'Our Models';
$lang['team_heading']                   = 'Team';
$lang['about_us_heading']               = 'About Us';
$lang['our_work_heading']               = 'Our Work';
$lang['work_with_us_heading']           = 'Work With Us';
$lang['contact_heading']                = 'Contact';

$lang['btn_send_label']                 = 'Send';
$lang['btn_cancel_label']               = 'Cancel';
$lang['btn_search_model_label']         = 'Search Model...';

$lang['btn_see_all_work_label']         = 'See All our Work';

$lang['btn_user_profile_label']         = 'Profile';

$lang['btn_user_log_out_label']         = 'Logout';

$lang['contact_us_heading']             = 'Contact Us';

$lang['email_sender_name_label']        = 'Name';
$lang['email_message_label']             = 'Message';
$lang['email_privacy_label']             = 'Privacy';

/***************Registration Pages*******************/
          /****First Step****/
$lang['registration_page_heading']                          = 'Registration Page';
$lang['registration_page_steps']                            = 'Step';
$lang['user_registration_email_label']                      = 'Email Address';
$lang['user_registration_confirm_email_label']              = 'Confirm Email Address';
$lang['user_registration_password_label']                   = 'Password';
$lang['user_registration_confirm_password_label']           = 'Confirm Password';

        /****Second Step****/
$lang['user_registration_personal_data_heading']            = 'Personal Data';
$lang['user_registration_gernder_label']                    = 'Gender';
$lang['user_registration_name_label']                       = 'Name';
$lang['user_registration_surname_label']                    = 'Surname';
$lang['user_registration_birth_place_label']                = 'Birth Place';
$lang['user_registration_dob_heading']                      = 'Date of Birth';
$lang['user_registration_dob_day_label']                    = 'Day';
$lang['user_registration_dob_month_label']                  = 'Mon';
$lang['user_registration_dob_year_label']                   = 'Year';
$lang['user_registration_nationality_label']                = 'Nationality';
$lang['user_registration_address_heading']                  = 'Address';
$lang['user_registration_address_country_lable']            = 'Country';
$lang['user_registration_address_region_lable']             = 'Region';
$lang['user_registration_address_province_lable']           = 'Province';
$lang['user_registration_zip_lable']                        = 'Zip';
$lang['user_registration_town_label']                       = 'Town';
$lang['user_registration_tax_code_heading_lable']           = 'Tax Code';
$lang['user_registration_vat_label']                        = 'VAT';
$lang['user_registration_contact_heading']                  = 'Contact';
$lang['user_registration_country_code_lable']               = 'Country Code';
$lang['user_registration_mobile_lable']                     = 'Mobile';
$lang['user_registration_facebook_lable']                   = 'Facebook';
$lang['user_registration_skype_label']                      = 'Skype';
$lang['user_registration_web_page_label']                   = 'Web Page';
$lang['user_registration_other_heading']                    = 'Others';
$lang['user_registration_car_label']                        = 'Car';
$lang['user_registration_driving_license_label']            = 'Driving License';
$lang['user_registration_available_accomodation_heading']   = 'Available Accommodations Other Than Home Residence';
$lang['user_registration_home_area_heading']                = 'Home Area';

        /****Third Step****/
$lang['user_registration_physical_characteristics_heading'] = 'Physical Characteristics';
$lang['user_registration_features_label']                   = 'Features';
$lang['user_registration_eyes_label']                       = 'Eyes';
$lang['user_registration_hair_colors_label']                = 'Hair Colour';
$lang['user_registration_hair_length_label']                = 'Hair Length';
$lang['user_registration_hair_type_label']                  = 'Hair Type';
$lang['user_registration_heitgh_label']                     = 'Height';
$lang['user_registration_bust_label']                       = 'Bust';
$lang['user_registration_Waist_label']                      = 'Waist';
$lang['user_registration_hips_label']                       = 'Hips';
$lang['user_registration_size_label']                       = 'Size';
$lang['user_registration_shoes_label']                      = 'Shoes';

$lang['user_registration_languages_heading']                = 'Languages';
$lang['user_registration_language_label']                   = 'Language';
$lang['user_registration_language_level_label']             = 'Language Level';
$lang['user_registration_add_another_language_btn']         = 'Add Languages';

$lang['user_registration_professional_skiil_heading']       = 'Professional Skills';

        /****Fourth Step****/
$lang['user_registration_picture_gallery_heading']          = 'Picture Gallery';
$lang['user_registration_upload_picture_label']             = 'Upload Picture';
$lang['user_registration_video_gallery_heading']            = 'Video Gallery';
$lang['user_registration_video_url_label']                  = 'Video URL';
$lang['user_registration_add_another_video_btn']            = 'Add';

        /**********Fifth Step***********/
$lang['user_registration_certified_heading']                = 'Certified';
$lang['user_registration_verified_heading']                 = 'Verified';
$lang['user_registration_public_heading']                   = 'Public';
$lang['user_registration_notes_label']                      = 'Notes';

$lang['user_registration_next_step_btn']                    = 'Next step';
$lang['user_registration_back_btn']                         = 'Back';
$lang['user_registration_register_btn']                     = 'Register';

$lang['user_update_forms_heading']                          = 'Update';

        /****Profile****/
$lang['user_personal_page_heading']                         = 'Personal Page';
$lang['user_age_heading']                                   = 'Age';
$lang['user_feaures_heading']                               = 'Features';
$lang['user_height_heading']                                = 'Height';
$lang['user_eyes_heading']                                  = 'Eyes';
$lang['user_hair_color_heading']                            = 'Hair Color';
$lang['user_hair_type_heading']                             = 'Hair Type';
$lang['user_hair_length_heading']                           = 'Hair Length';
$lang['user_bust_heading']                                  = 'Bust';
$lang['user_waist_heading']                                 = 'Waist';
$lang['user_hips_heading']                                  = 'Hips';
$lang['user_shoes_heading']                                 = 'Shoes';
$lang['user_size_heading']                                  = 'Size';
$lang['user_nationality_heading']                           = 'Nationality';
$lang['user_available_accomodation_heading']                = 'Available Accommodations';
$lang['user_professional_skills_heading']                   = 'Professional Skills';

$lang['required_validation_error']                          = 'is required';

$lang['required_agree_check_validation_error']              = 'Agree Check';

$lang['user_phone_heading']                                 = 'Phone';
$lang['user_signed_up_heading']                             = 'Signed up';
$lang['user_last_modify_date_heading']                      = 'Last Modify Date';
$lang['user_basic_inforation_heading']                      = 'Basic Informations';
$lang['user_complete_address_heading']                      = 'Complete Address';
$lang['user_tabs_contnt_heading']                           = 'All tabs have content';
$lang['user_edit_btn_heading']                              = 'Edit user';

        /*************************Search Engine******************************/

$lang['engine_search_heading']                              = 'Engine Search';
$lang['engine_search_user_heading']                         = 'Search Users';
$lang['engine_search_user_information_heading']             = 'User Information';
$lang['engine_search_from_heading']                         = 'From';
$lang['engine_search_to_heading']                           = 'To';
$lang['engine_search_hair_heading']                         = 'Hair';
$lang['engine_search_colour_heading']                       = 'Colour';
$lang['engine_search_type_heading']                         = 'Type';
$lang['engine_search_length_heading']                       = 'Length';
$lang['engine_search_car_owner_heading']                    = 'Car Owner';
$lang['engine_search_engagment_abroad_heading']             = 'Engagement Abroad';
$lang['engine_search_active_heading']                       = 'Active';
$lang['engine_search_not_active_heading']                   = 'Not Active';
$lang['engine_search_not_verified_heading']                 = 'Not Verified';
$lang['engine_search_not_public_heading']                   = 'Not Public';
$lang['engine_search_not_certified_heading']                = 'Not Certified';
$lang['engine_search_work_zone_heading']                    = 'Work Zone';
$lang['engine_search_clear_btn']                            = 'Clear';

$lang['engine_search_skills_heading']                       = 'Skills';

$lang['engine_search_select_option']                        = 'Select';

$lang['engine_search_btn']                                  = 'Search';

$lang['engine_status_heading']                              = 'Status';
$lang['engine_action_heading']                              = 'Action';
$lang['public_in_home_page']                                = 'Public in home page';
$lang['not_public_in_home_page']                            = 'Not Public in home page';

$lang['home_page_contact_us_heading']                       = 'Contact Us';

/******************************Left Side bar************************************/
$lang['left_sidebar_sign_out']                              = 'Sign out';
$lang['left_sidebar_manage_users']                          = 'Manage User';
$lang['left_sidebar_create_manager']                        = 'Create Manager';
$lang['left_sidebar_create_client_manager']                 = 'Create Client Manager';
$lang['left_sidebar_create_commercial_user']                = 'Create Commercial User';
$lang['left_sidebar_create_standard_user']                  = 'Create Standard User';
$lang['left_sidebar_manager_list']                          = 'Managers List';
$lang['left_sidebar_client_manager_list']                   = 'Client Managers List';
$lang['left_sidebar_commercial_user_list']                  = 'Commercial Users List';
$lang['left_sidebar_manage_pages']                          = 'Manage Pages';
$lang['left_sidebar_create_page']                           = 'Create Page';
$lang['left_sidebar_page_list']                             = 'Page List';
$lang['left_sidebar_activity_log']                          = 'Activity Log';
$lang['left_sidebar_slider_management']                     = 'Slider Management';
$lang['left_sidebar_add_new_image']                         = 'Add New Image';
$lang['left_sidebar_image_list']                            = 'Image List';
$lang['left_sidebar_image_library']                         = 'Images Library';
$lang['left_sidebar_add_image_in_library']                  = 'Add Image in Library';
$lang['left_sidebar_image_library_list']                    = 'Images library List';

$lang['image_lable']                                        = 'Image';
$lang['list_lable']                                         = 'List';

/***********************************Create Manager****************************************/
$lang['create_manager_name']                                = 'Manager Name';
$lang['create_manager_email']                               = 'Manager Email';
$lang['create_manager_confirm_email']                       = 'Manager Confirm Email';
$lang['create_manager_password']                            = 'Manger Password';
$lang['create_manager_re_type_password']                    = 'Re-Type Manger Password';

$lang['create_manager_name_error_message']                  = 'Enter manager name';
$lang['create_manager_email_error_messaage']                = 'Enter manager email';
$lang['create_manager_confirm_email_error_message']         = 'Enter manager confirm email';
$lang['create_manager_password_error_message']              = 'Enter manager pasword';
$lang['create_manager_re_type_password_error_message']      = 'Enter manager confirm pasword';
$lang['create_manager_country_message_error_message']       = 'Country is mandatory';

$lang['update_manager_heading']                             = 'Update Manager';

$lang['manager_list_email_heading']                         = 'Email';

/***********************************Create Commerical User****************************************/
$lang['create_commercial_user_heading']                     = 'Create Commercial User';
$lang['create_commercial_user_name']                        = 'Commercial User Name';
$lang['create_commerical_user_email']                       = 'Commercial User Email';
$lang['create_commerical_user_confirm_email']               = 'Commercial User Confirm Email';
$lang['create_commerical_password']                         = 'Commercial User Password';
$lang['create_commerical_re_type_password']                 = 'Re-Type Commercial User Password';

$lang['create_commercial_user_name_error_message']                  = 'Enter commercial user name';
$lang['create_commercial_user_email_error_messaage']                = 'Enter  commercial user email';
$lang['create_commercial_user_confirm_email_error_message']         = 'Enter  commercial user confirm email';
$lang['create_commercial_user_password_error_message']              = 'Enter  commercial user pasword';
$lang['create_commercial_user_re_type_password_error_message']      = 'Enter  commercial user confirm pasword';
$lang['create_commercial_user_country_message_error_message']       = 'Country is mandatory';

$lang['update_commerical_user_heading']                             = 'Update Commerical User';

/***********************************Create Client Manager****************************************/

$lang['client_manager_name']                                        = 'Client Manager Name';
$lang['client_manager_email']                                       = 'Client Manager Email';
$lang['client_manager_confirm_email']                               = 'Client Manager Confirm Email';
$lang['client_manager_password']                                    = 'Client Manger Password';
$lang['client_manager_re_type_password']                            = 'Re-Type Password';

$lang['create_client_manager_name_error_message']                  = 'Enter manager name';
$lang['create_client_manager_email_error_message']                 = 'Enter manager email';
$lang['create_client_manager_confirm_email_error_message']         = 'Enter manager confirm email';
$lang['create_client_manager_password_error_message']              = 'Enter manager pasword';
$lang['create_client_manager_re_type_password_error_message']      = 'Enter manager confirm pasword';

$lang['client_manager_add_success_message']                        = 'New client manager has been added successfully.';
$lang['client_manager_update_success_message']                     = 'New client manager has been updated successfully.';

$lang['update_client_manager_heading']                             = 'Update Client Manager';

/***********************************Page Management****************************************/
$lang['create_page_heading']                                = 'Create Pages';
$lang['create_page_short_text']                             = 'Short Text';
$lang['create_page_short_text_title']                       = 'Short Text for under page heading area';
$lang['create_page_language']                               = 'Page Language';
$lang['create_page_name']                                   = 'Page Name / Title';
$lang['create_page_content']                                = 'Page Content';

$lang['update_page_heading']                                = 'Update Pages';

$lang['page_management_title']                              = 'Title';

$lang['02_model_title']                                     = 'Models';
$lang['admin_heading']                                      = 'Admin';

$lang['btn_remove_heading']                                 = 'Remove';

/*************************Database Values******************************/
/*****Features*****/
$lang['african_label']                                      = 'African';
$lang['asian_label']                                        = 'Asian';
$lang['indian_label']                                       = 'Indian';
$lang['latin_american_label']                               = 'Latin-American';
$lang['mediterranean_label']                                = 'Mediterranean';
$lang['middle_eastern_label']                               = 'Middle Eastern';
$lang['nordic_label']                                       = 'nordic';
$lang['north_african_label']                                = 'North African';
$lang['slavic_label']                                       = 'Slavic';

/*****Eyes*****/
$lang['brown_label']                                        = 'Brown';
$lang['black_label']                                        = 'Black';
$lang['blue_label']                                         = 'Blue';
$lang['green_label']                                        = 'Green';
$lang['hazel_label']                                        = 'Hazel';
$lang['amber_label']                                        = 'Amber';
$lang['grey_label']                                         = 'Gray';
$lang['violet_label']                                       = 'Violet';

/*****Hair Color*****/

$lang['hair_traditional_color_label']                       = 'Traditional Colour';
$lang['hair_crazy_color_label']                             = 'Crazy Colour';

$lang['hair_color_black_label']                             = 'Black';
$lang['hair_color_brown_label']                             = 'Brown';
$lang['hair_colour_copper_label']                           = 'Copper';
$lang['hair_colour_blond_label']                            = 'Blond';
$lang['hair_color_dark_brown_label']                        = 'Dark Brown';
$lang['hair_color_light_brown_label']                       = 'Light brown';
$lang['hair_color_dark_blond_label']                        = 'Dark blond';
$lang['hair_color_being_light_blond_label']                 = 'Beige light blond';
$lang['hair_color_golden_light_blond_label']                = 'Golden light blond';
$lang['hair_color_light_blond_label']                       = 'Light blond';
$lang['hair_color_mediam_blond_label']                      = 'Medium blond';
$lang['hair_color_ultra_light_blond_label']                 = 'Ultra-light blond';
$lang['hair_color_very_light_blond_label']                  = 'Very light blond';
$lang['hair_color_golden_blond_label']                      = 'Golden blond';
$lang['hair_color_golden_very_light_blond_label']           = 'Golden very light blond';
$lang['hair_color_dark_copper_label']                       = 'Dark copper';
$lang['hair_color_copper_golden_light_blond_label']         = 'Copper golden light blond';
$lang['hair_color_mahogany_brown_label']                    = 'Mahogany brown';
$lang['hair_color_mahogany_light_brown_label']              = 'Mahogany light brown';
$lang['hair_color_salt_pepper_label']                       = 'salt/pepper';
$lang['hair_color_Intense_red_label']                       = 'Intense red';
$lang['hair_color_red_label']                               = 'Red';
$lang['hair_color_Copper_red_light_brown_label']            = 'Copper red light brown';
$lang['hair_color_light_golden_blond_label']                = 'Light golden blond';
$lang['hair_color_golden_blond_label']                      = 'Golden blond';
$lang['hair_color_dark_golden_blond_label']                 = 'Dark golden blon)';
$lang['hair_color_very_light_platinum_blond_label']         = 'Very light platinum blond';
$lang['hair_color_light_natural_silver_label']              = 'Light natural silver';
$lang['hair_color_golden_ultra_very_light_platinum_blond_label']      = 'Golden ultra very light platinum blond';
$lang['hair_color_ultra_very_light_platinum_blond_label']   = 'Ultra very light platinum blond';

$lang['hair_color_crazy_colour_blue_label']                 = 'Blue';
$lang['hair_color_crazy_colour_torquoise_label']            = 'Torquoise';
$lang['hair_color_crazy_colour_lilac_label']                = 'Lilac';
$lang['hair_color_crazy_colour_new_purple_label']           = 'New Purple';
$lang['hair_color_crazy_colour_red_label']                  = 'Red';
$lang['hair_color_crazy_colour_fuxia_label']                = 'Fuxia';
$lang['hair_color_crazy_colour_orange_label']               = 'Orange';
$lang['hair_color_crazy_colour_yellow_label']               = 'Yellow';
$lang['hair_color_crazy_colour_apple_green_label']          = 'Apple Green';
$lang['hair_color_crazy_colour_red_violet_label']           = 'Red Violet';
$lang['hair_color_crazy_colour_violet_label']               = 'Violet';
$lang['hair_color_crazy_colour_pink_label']                 = 'Pink';
$lang['hair_color_crazy_colour_wistaria_label']             = 'Wistaria';


/*****Hair Length*****/
$lang['long_label']                                         = 'Long';
$lang['medium_label']                                       = 'Medium';
$lang['shaved_label']                                       = 'Shaved';
$lang['short_label']                                        = 'Short';

/*****Hair Type*****/
$lang['wave_label']                                         = 'Wave';
$lang['curly_label']                                        = 'Curly';
$lang['straight_label']                                     = 'Straight';

/*****Language Level*****/
$lang['basic_label']                                        = 'Basic';
$lang['medium_label']                                       = 'Medium';
$lang['good_label']                                         = 'Good';
$lang['excellent_label']                                    = 'Excellent';
$lang['native_language_label']                              = 'Native Language';

/*****Professional Skills*****/
$lang['catwalks_label']                                     = 'Catwalks';
$lang['glamor_label']                                       = 'Glamor';
$lang['makeup_label']                                       = 'Makeup';
$lang['photo_shooting_label']                               = 'Photo shooting';
$lang['hostess_for_clubs_label']                            = 'Hostess for clubs';
$lang['hostess_steward_label']                              = 'Hostess/Steward for fairs, congresses and events';
$lang['image_hostess_shooting_label']                       = 'Image hostess/steward';
$lang['interpreter_label']                                  = 'Interpreter';

$lang['partial_nude_label']                                 = 'Partial Nude';
$lang['fashion_show_label']                                 = 'Fashion Show';
$lang['showroom_label']                                     = 'Showroom';
$lang['tv_publicity_video_label']                           = 'Tv, Publicity, Video';
$lang['lingerie_label']                                     = 'lingerie';
$lang['hair_show_label']                                    = 'Hair Show';
$lang['fitting_label']                                      = 'Fitting';
$lang['theatre_cinema_label']                               = 'Theatre / Cinema';
$lang['body_painting_label']                                = 'Body painting';

/*****Gender*****/
$lang['male']                                                = 'Male';
$lang['female']                                              = 'Female';

/**************Search Result*****************/
$lang['search_result_inactive_label']                       = 'Inactive';
$lang['search_result_view_phone_label']                     = 'view phone';
$lang['search_result_view_email_label']                     = 'view email';
$lang['search_result_btn_view']                             = 'View';
$lang['search_result_btn_edit']                             = 'Edit';
$lang['search_result_btn_edit_notes']                       = 'Notes Edit';
$lang['search_result_btn_delete']                           = 'Delete';
$lang['search_result_get_quote_heading']                    = 'Get Quote';
$lang['search_result_download_email_heading']               = 'Download Email';
$lang['search_result_download_all_email_heading']           = 'Download All Email';
$lang['search_result_download_phone_heading']               = 'Download Phone';
$lang['search_result_download_all_phone_heading']           = 'Download All Phone';
$lang['search_result_send_email_heading']                   = 'Send Email';

/*******************Region Province**********************/
$lang['add_new_region_heading']                             = 'Add Region';
$lang['btn_save_region']                                    = 'Save Region';
$lang['add_new_province_heading']                           = 'Add City';
$lang['btn_save_province']                                  = 'Save City';
$lang['btn_close_heading']                                  = 'Close';
$lang['add_new_country_heading']                            = 'Add Country';
$lang['add_new_country_iso_code_heading']                   = 'Country ISO Code';
$lang['add_new_country_continent_heading']                  = 'Continent';
$lang['btn_save_country']                                   = 'Save Country';

$lang['update_region_heading']                             = 'Update Region';
$lang['update_province_heading']                           = 'Update City';
$lang['update_country_heading']                            = 'Update Country';

$lang['add_new_country_success_message']                   = 'Country has been added successfully!';
$lang['add_new_region_success_message']                    = 'Region has been added successfully!';
$lang['add_new_province_success_message']                  = 'Province has been added successfully!';
$lang['update_region_success_message']                     = 'Region has been updated successfully!';
$lang['update_province_success_message']                   = 'Province has been updated successfully!';
$lang['update_country_success_message']                    = 'Country has been updated successfully!';
$lang['delete_province_success_message']                   = 'Province has been deleted successfully!';
$lang['delete_region_success_message']                     = 'Region has been deleted successfully!';
$lang['delete_country_success_message']                    = 'Country has been deleted successfully!';

//* Common Terms */

$lang['email']                                              = 'Email';
$lang['download_email_file_name']                           = 'Email-MMA';
$lang['download_phone_file_name']                           = 'Phone-MMA';
$lang['languages_label']                                    = 'Languages';
$lang['hair_label']                                         = 'Hair';
$lang['body_label']                                         = 'Body';

$lang['manager_heading']                                    = 'Managers';
$lang['manager_lists_heading']                              = 'Managers List';

$lang['commerical_user_heading']                            = 'Commercial Users';
$lang['commerical_user_lists_heading']                      = 'Commercial Users List';

$lang['client_manager_heading']                             = 'Client Manager';
$lang['client_manager_lists_heading']                       = 'Client Managers List';

$lang['no_video_available_heading']                         = 'No Video Available';

$lang['yes_heading']                                        = 'Yes';

$lang['page_title_heading']                                 = 'Page';

$lang['delete_popup_message']                               = 'Are you sure you want to delete this?';
$lang['province_will_be_delete']                            = 'province will be deleted';
$lang['region_will_be_delete']                              = 'region will be deleted';

$lang['log_heading']                                        = 'Log';
$lang['target_user_heading']                                = 'Target User';
$lang['activity_performed_heading']                         = 'Activity Performed';
$lang['date_heading']                                       = 'Date';

$lang['page_update_success_message']                        = 'Page has been updated successfully';

$lang['no_user_found_heading']                              = 'No User Found';
$lang['user_status_change_label']                           = 'User has been changed to ';
$lang['user_status_not_change_label']                       = 'Unable to change user status. Please try again.';


/*******************Datatable pagination**********************/
$lang['s_empty_table_heading']                              = 'No records found';
$lang['s_info_heading']                                     = 'Showing _START_ to _END_ of _TOTAL_ entries';
$lang['s_info_empty_heading']                               = 'Showing 0 to 0 of 0 entries';
$lang['s_info_filtered_heading']                            = '(filtered from _MAX_ total entries)';
$lang['s_length_menu_heading']                              = 'Show _MENU_ entries';
$lang['s_loading_records_heading']                          = 'Loading...';
$lang['s_processing_heading']                               = 'Processing...';
$lang['s_zero_records_heading']                             = 'No matching records found';
$lang['s_first_heading']                                    = 'First';
$lang['s_last_heading']                                     = 'Last';
$lang['s_next_heading']                                     = 'Next';
$lang['s_previous_heading']                                 = 'Previous';

$lang['send_email_all_users']                               = 'Send Email to All';


/*******************Clients**********************/
$lang['clients_heading']                                    = 'Clients';
$lang['add_client_heading']                                 = 'Add Client';
$lang['client_category']                                    = 'Client Category';
$lang['client_fair_name']                                   = 'Fair Name';
$lang['client_fair_start_date']                             = 'Fair Start Date';
$lang['client_fair_end_date']                               = 'Fair End Date';
$lang['btn_fair_another']                                   = 'Add another';
$lang['client_type_heading']                                = 'Client Type';
$lang['new_client_heading']                                 = 'New Client';
$lang['old_client_heading']                                 = 'Old Client';
$lang['clients_search_heading']                             = 'Search Clients';

$lang['client_invoice_number_and_amount']                   = 'Invoice Number and Amount';
$lang['client_cost_related_to_the_bill']                    = 'Costs Related To The Bill';
$lang['client_our_referent']                                = 'Our Referent';
$lang['client_work_description']                            = 'Description of Work';
$lang['client_company_number']                              = 'Company Number';
$lang['client_phone_office']                                = 'Phone Office';
$lang['client_contact_person']                              = 'Contact Person';
$lang['client_mail']                                        = 'Mail';
$lang['client_web_site']                                    = 'Web site';
$lang['client_btn_save']                                    = 'Save';
$lang['client_btn_update']                                  = 'Update';

$lang['update_client_heading']                              = 'Update Client';

$lang['client_id']                                          = 'Client ID';             
$lang['client_name']                                        = 'Name';             
$lang['client_category']                                    = 'Category';             
$lang['client_mobile']                                      = 'Mobile';             
$lang['client_crete_date']                                  = 'Created Date';             
$lang['client_last_modify']                                 = 'Last Modify Date';
$lang['client_fair']                                        = 'Fair';
$lang['view_fair']                                          = 'View Fair';
$lang['fair_detail_heading']                                = 'Fair Details';
$lang['fair_name']                                          = 'Fair Name';
$lang['fair_start_date']                                    = 'Start Date';
$lang['fair_end_date']                                      = 'End Date';
$lang['no_fair_available']                                  = 'No Fair Available';

$lang['close_button']                                       = 'Close';
$lang['edit_client']                                        = 'Edit Client';

$lang['work_zone_accommodation_check']                      = 'Accommodation';

/*..Quotes page..*/

$lang['measures_label']                                     = 'Measures';

$lang['session_expire_message']                             = 'Session Expired';

