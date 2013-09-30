<?php
	//application details
		$apps[$x]['name'] = 'Conference Center';
		$apps[$x]['uuid'] = '8d083f5a-f726-42a8-9ffa-8d28f848f10e';
		$apps[$x]['category'] = 'Switch';
		$apps[$x]['subcategory'] = '';
		$apps[$x]['version'] = '';
		$apps[$x]['license'] = 'Mozilla Public License 1.1';
		$apps[$x]['url'] = 'http://www.fusionpbx.com';
		$apps[$x]['description']['en-us'] = 'Conferences Centers allows one or more audio and video conference rooms.';
		$apps[$x]['description']['es-mx'] = 'El Centro de Conferencia permite una o más recámaras de conferencia para audio y video.';
		$apps[$x]['description']['de-de'] = '';
		$apps[$x]['description']['de-ch'] = '';
		$apps[$x]['description']['de-at'] = '';
		$apps[$x]['description']['fr-fr'] = "Centre de Conférences permet une ou plus conferences audio ou vidéo.";
		$apps[$x]['description']['fr-ca'] = '';
		$apps[$x]['description']['fr-ch'] = '';
		$apps[$x]['description']['pt-pt'] = '';
		$apps[$x]['description']['pt-br'] = '';

	//menu details
		$y = 0;
		$apps[$x]['menu'][$y]['title']['en-us'] = 'Conference Center';
		$apps[$x]['menu'][$y]['title']['es-mx'] = 'Centro de Conferencias';
		$apps[$x]['menu'][$y]['title']['de-de'] = '';
		$apps[$x]['menu'][$y]['title']['de-ch'] = '';
		$apps[$x]['menu'][$y]['title']['de-at'] = '';
		$apps[$x]['menu'][$y]['title']['fr-fr'] = 'Centre de Conférences';
		$apps[$x]['menu'][$y]['title']['fr-ca'] = '';
		$apps[$x]['menu'][$y]['title']['fr-ch'] = '';
		$apps[$x]['menu'][$y]['title']['pt-pt'] = 'Conferencias';
		$apps[$x]['menu'][$y]['title']['pt-br'] = '';
		$apps[$x]['menu'][$y]['uuid'] = '95f88726-4706-43f0-b52b-9504a0b8046f';
		$apps[$x]['menu'][$y]['parent_uuid'] = 'fd29e39c-c936-f5fc-8e2b-611681b266b5';
		$apps[$x]['menu'][$y]['category'] = 'internal';
		$apps[$x]['menu'][$y]['path'] = '/app/conference_centers/conference_centers.php';
		$apps[$x]['menu'][$y]['groups'][] = 'superadmin';
		$apps[$x]['menu'][$y]['groups'][] = 'admin';

	//permission details
		$y = 0;
		$apps[$x]['permissions'][$y]['name'] = 'conference_center_view';
		$apps[$x]['permissions'][$y]['menu']['uuid'] = '95f88726-4706-43f0-b52b-9504a0b8046f';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'conference_center_add';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'conference_center_edit';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'conference_center_delete';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'conference_room_view';
		$apps[$x]['permissions'][$y]['menu']['uuid'] = '';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$apps[$x]['permissions'][$y]['groups'][] = 'user';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'conference_room_add';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$apps[$x]['permissions'][$y]['groups'][] = 'user';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'conference_room_edit';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$apps[$x]['permissions'][$y]['groups'][] = 'user';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'conference_room_delete';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$apps[$x]['permissions'][$y]['groups'][] = 'user';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'conference_session_view';
		$apps[$x]['permissions'][$y]['menu']['uuid'] = '';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$apps[$x]['permissions'][$y]['groups'][] = 'user';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'conference_session_play';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$apps[$x]['permissions'][$y]['groups'][] = 'user';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'conference_session_details';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'conference_room_profile';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$apps[$x]['permissions'][$y]['groups'][] = 'user';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'conference_room_record';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$apps[$x]['permissions'][$y]['groups'][] = 'user';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'conference_room_max_members';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$apps[$x]['permissions'][$y]['groups'][] = 'user';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'conference_room_wait_mod';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$apps[$x]['permissions'][$y]['groups'][] = 'user';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'conference_room_announce';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$apps[$x]['permissions'][$y]['groups'][] = 'user';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'conference_room_mute';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$apps[$x]['permissions'][$y]['groups'][] = 'user';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'conference_room_sounds';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$apps[$x]['permissions'][$y]['groups'][] = 'user';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'conference_room_enabled';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$apps[$x]['permissions'][$y]['groups'][] = 'user';
		$y++;
                $apps[$x]['permissions'][$y]['name'] = 'conference_session_add';
                $apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
                $apps[$x]['permissions'][$y]['groups'][] = 'admin';
                $y++;
                $apps[$x]['permissions'][$y]['name'] = 'conference_session_edit';
                $apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
                $apps[$x]['permissions'][$y]['groups'][] = 'admin';
                $y++;
                $apps[$x]['permissions'][$y]['name'] = 'conference_session_delete';
                $apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
                $apps[$x]['permissions'][$y]['groups'][] = 'admin';
                $y++;
                $apps[$x]['permissions'][$y]['name'] = 'conference_session_detail_view';
                $apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
                $apps[$x]['permissions'][$y]['groups'][] = 'admin';
                $y++;
                $apps[$x]['permissions'][$y]['name'] = 'conference_session_detail_add';
                $apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
                $apps[$x]['permissions'][$y]['groups'][] = 'admin';
                $y++;
                $apps[$x]['permissions'][$y]['name'] = 'conference_session_detail_edit';
                $apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
                $apps[$x]['permissions'][$y]['groups'][] = 'admin';
                $y++;
                $apps[$x]['permissions'][$y]['name'] = 'conference_session_detail_delete';
                $apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
                $apps[$x]['permissions'][$y]['groups'][] = 'admin';

	//schema details
		$y = 0; //table array index
		$z = 0; //field array index
		$apps[$x]['db'][$y]['table'] = 'v_conference_centers';
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'domain_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'foreign';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = 'v_domains';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = 'domain_uuid';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'conference_center_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'primary';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'dialplan_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = '';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'foreign';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = 'v_dialplans';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = 'dialplan_uuid';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'conference_center_name';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the conference center name.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'conference_center_extension';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the conference center extension number.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'conference_center_pin_length';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'numeric';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the pin length.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'conference_center_description';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the center description.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'conference_center_enabled';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enable or disable the conference center.';

		$y = 1; //table array index
		$z = 0; //field array index
		$apps[$x]['db'][$y]['table'] = 'v_conference_rooms';
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'domain_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'foreign';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = 'v_domains';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = 'domain_uuid';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'conference_room_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'primary';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'conference_center_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'foreign';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = 'v_conference_centers';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = 'conference_center_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Conference UUID';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'meeting_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'foreign';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = 'v_meetings';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = 'meeting_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Meeting UUID';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'profile';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Select the conference profile.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = 'record';
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = 'recording';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Select whether to record the conference.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'max_members';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'numeric';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Limit number of people in the conference.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'wait_mod';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Wait for the moderator to join before starting the conference.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'announce';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Introduce participants as they enter the conference.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'sounds';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Play sound when someone enters or exists the conference.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'mute';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Mute participants on entering the conference.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'created';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Date when the conference was created.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'created_by';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'The user that created the conference session.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'enabled';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Select to enable or disable the session.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'description';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Description.for the conference session.';
		$z++;

		$y = 2; //table array index
		$z = 0; //field array index
		$apps[$x]['db'][$y]['table'] = 'v_conference_sessions';
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'domain_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'foreign';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = 'v_domains';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = 'domain_uuid';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'conference_session_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'primary';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'meeting_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'foreign';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = 'v_meetings';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = 'meeting_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'meeting_uuid';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'profile';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Select the conference profile.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'recording';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Conference Recording';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'start_epoch';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'numeric';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'start_epoch';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'end_epoch';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'numeric';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'end_epoch';
		$z++;

		$y = 3; //table array index
		$z = 0; //field array index
		$apps[$x]['db'][$y]['table'] = 'v_conference_session_details';
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'domain_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'foreign';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = 'v_domains';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = 'domain_uuid';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'conference_session_detail_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'primary';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'conference_session_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'foreign';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = 'v_conference_sessions';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = 'conference_session_uuid';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'meeting_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'foreign';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = 'v_meetings';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = 'meeting_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'meeting_uuid';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'username';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Extension number.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'caller_id_name';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'caller_id_name';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'caller_id_number';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'caller_id_number';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Call UUID';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'moderator';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Moderator';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'network_addr';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'network address';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'start_epoch';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'numeric';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'start_epoch';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'end_epoch';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'numeric';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'end_epoch';
		$z++;

		/*
		$y = 4; //table array index
		$z = 0; //field array index
		$apps[$x]['db'][$y]['table'] = 'v_conference_center_users';
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'conference_user_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'primary';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = '';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'domain_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'foreign';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = 'v_domains';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = 'domain_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = '';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'conference_center_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'foreign';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = 'v_conference_centers';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = 'conference_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = '';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'user_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'foreign';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = 'v_users';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = 'user_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = '';
		*/

?>
