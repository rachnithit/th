<?php
/*
	Question2Answer (c) Gideon Greenspan
	http://www.question2answer.org/
	Description: ภาษาไทยในไฟล์นี้ถูกแปลโดย https://answer.in.th/
	Author: Thai Language by https://answer.in.th/
	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	More about this license: http://www.question2answer.org/license.php
*/

return array(
	'a_commented_body' => "คำตอบของคุณบนเว็บ ^site_title มีความคิดเห็นใหม่ โดย ^c_handle:\n\n^open^c_content^close\n\nคำตอบคือ:\n\n^open^c_context^close\n\nคุณสามารถตอบกลับได้:\n\n^url\n\nขอบคุณ,\n\n^site_title",
	'a_commented_subject' => 'คำถามของคุณบนเว็บ ^site_title มีความคิดเห็น',

	'a_followed_body' => "คำตอบของคุณบนเว็บ ^site_title มีคำถามที่เกี่ยวข้องโดย ^q_handle:\n\n^open^q_title^close\n\nคำตอบของคุณคือ:\n\n^open^a_content^close\n\nคลิ๊กที่ลิงค์เพื่อตอบคำถาม:\n\n^url\n\nขอบคุณ,\n\n^site_title",
	'a_followed_subject' => 'คำตอบของคุณที่ ^site_title มีคำถามที่เกี่ยวข้อง',

	'a_selected_body' => "ยินดีด้วย! คำตอบของคุณบน ^site_title ถูกเลือกว่าเป็นคำตอบที่ดีที่สุดโดย ^s_handle:\n\n^open^a_content^close\n\nคำถามคือ:\n\n^open^q_title^close\n\nคลิ๊กที่ลิงค์ด้านล่างเพื่อดูคำตอบ:\n\n^url\n\nขอบคุณ,\n\n^site_title",
	'a_selected_subject' => 'Your ^site_title answer has been selected!',

	'c_commented_body' => "ความคิดเห็นใหม่ถูกเพิ่ม ^c_handle ต่อจากความคิดเห็นของคุณ ^site_title:\n\n^open^c_content^close\n\nติดตามการพูดคุยได้ที่:\n\n^open^c_context^close\n\nคุณสามารถโต้ตอบได้ที่:\n\n^url\n\nขอบคุณ,\n\n^site_title",
	'c_commented_subject' => 'ความคิดเห็น ^site_title ถูกเพิ่มแล้ว',

	'confirm_body' => "กรุณาคลิ๊กที่ลิงค์ด้านล่างเพื่อยืนยัน ^site_title.\n\n^url\n\nConfirmation code(รหัสยืนยัน): ^code\n\n ขอบคุณ,\n^site_title",
	'confirm_subject' => '^site_title - การยืนยัน Email',

	'feedback_body' => "ความคิดเห็น:\n^message\n\nName:\n^name\n\nEmail:\n^email\n\nPrevious page:\n^previous\n\nUser:\n^url\n\nIP address:\n^ip\n\nBrowser:\n^browser",
	'feedback_subject' => '^ feedback',

	'flagged_body' => "A post by ^p_handle has received ^flags:\n\n^open^p_context^close\n\nคลิ๊กที่ลิงค์ด้านล่างเพื่อดูรายละเอียด:\n\n^url\n\n\nคลิ๊กที่ลิงค์ด้านล่างเพื่อตรวจสอบดูปักหมุด:\n\n^a_url\n\n\nขอบคุณ,\n\n^site_title",
	'flagged_subject' => '^site_title มีการปักหมุดโพสต์',

	'moderate_body' => "ข้อความโดย ^p_handle requires your approval:\n\n^open^p_context^close\n\nClick below to approve or reject the post:\n\n^url\n\n\nClick below to review all queued posts:\n\n^a_url\n\n\nขอบคุณ,\n\n^site_title",
	'moderate_subject' => '^site_title moderation',

	'new_password_body' => "รหัสผ่านใหม่สำหรับ ^site_title is below.\n\nPassword: ^password\n\nเราแนะนำให้รีบเปลี่ยนรหัสผ่านใหม่เมื่อเข้าสู่ระบบได้สำเร็จ.\n\nขอบคุณ,\n^site_title\n^url",
	'new_password_subject' => '^site_title - รหัสผ่านใหม่',

	'private_message_body' => "คุณส่งข้อความส่วนตัว by ^f_handle on ^site_title:\n\n^open^message^close\n\n^moreขอบคุณ,\n\n^site_title\n\n\nหากต้องการบล็อกข้อความ, กรุณาไปสู่หน้าโปรไฟล์ของคุณที่:\n^a_url",
	'private_message_info' => "รายละเอียดเพิ่มเติมเกี่ยวกับ ^f_handle:\n\n^url\n\n",
	'private_message_reply' => "คิ๊กที่ลิงค์ด้านล่างเพื่อตอบกลับข้อความ ^f_handle by private message:\n\n^url\n\n",
	'private_message_subject' => 'ข้อความจาก ^f_handle บน ^site_title',

	'q_answered_body' => "คำถามของคุณบน ^site_title ได้รับคำตอบจากผู้ใช้ ^a_handle:\n\n^open^a_content^close\n\nคำถามของคุณคือ:\n\n^open^q_title^close\n\nถ้าคุณชอบคำตอบนี้, คุณสามารถเลือกคำตอบนี้เป็นคำตอบที่ดีที่สุด ไปที่:\n\n^url\n\nขอบคุณ,\n\n^site_title",
	'q_answered_subject' => 'คำถามของคุณบน ^site_title ได้รับคำตอบแล้ว',

	'q_commented_body' => "คำถามของคุณบน ^site_title มีความคิดเห็นใหม่โดย ^c_handle:\n\n^open^c_content^close\n\nคำถามของคุณือ:\n\n^open^c_context^close\n\nคุณสามารถตอบกลับความคิดเห็นได้ที่:\n\n^url\n\nขอบคุณ,\n\n^site_title",
	'q_commented_subject' => 'คำถามของคุณบน ^site_title มีความคิดเห็นใหม่',

	'q_posted_body' => "มีคำถามใหม่โดย ^q_handle:\n\n^open^q_title\n\n^q_content^close\n\nคลิ๊กที่ลิงค์ด้านล่างเพื่อดูคำถาม:\n\n^url\n\nขอบคุณ,\n\n^site_title",
	'q_posted_subject' => '^site_title มีคำถามใหม่',

	'remoderate_body' => "An edited post by ^p_handle requires your reapproval:\n\n^open^p_context^close\n\nClick below to approve or hide the edited post:\n\n^url\n\n\nClick below to review all queued posts:\n\n^a_url\n\n\nขอบคุณ,\n\n^site_title",
	'remoderate_subject' => '^site_title moderation',

	'reset_body' => "คลิ๊กที่ลิงค์ด้านล่างเพื่อรีเซตรหัสผ่านสำหรับ ^site_title.\n\n^url\n\nหรือนำโค้ดนี้ไปกรอกบนหน้าเว็บ.\n\nCode: ^code\n\nหากคุณไม่ได้ดำเนินการขอรีเซตรหัสผ่าน, กรุณาเพิกเฉยต่อข้อความนี้.\n\nขอบคุณ,\n^site_title",
	'reset_subject' => '^site_title - รีเซตรหัสผ่าน',

	'to_handle_prefix' => "^,\n\n",

	'u_registered_body' => "A new user has registered as ^u_handle.\n\nClick below to view the user profile:\n\n^url\n\nขอบคุณ,\n\n^site_title",
	'u_registered_subject' => '^site_title has a new registered user',
	'u_to_approve_body' => "มีคนลงทะเบียนใหม่ ^u_handle.\n\nClick below to approve the user:\n\n^url\n\nClick below to review all users waiting for approval:\n\n^a_url\n\nขอบคุณ,\n\n^site_title",

	'u_approved_body' => "คุณสามารถดูโปรไฟล์ผู้ใช้รายใหม่ได้ที่:\n\n^url\n\nขอบคุณ,\n\n^site_title",
	'u_approved_subject' => '^site_title ผู้ใช้ของคุณได้รับการอนุมัติ',

	'wall_post_body' => "^f_handle ได้โพสต์ลงบนหน้าวอลล์ของคุณที่ ^site_title:\n\n^open^post^close\n\nคุณสามารถเข้าดูรายละเอียดได้ที่:\n\n^url\n\nขอบคุณ,\n\n^site_title",
	'wall_post_subject' => 'มีผู้ใช้โพสต์ข้อความบน ^site_title ที่หน้าวอลล์คุณ',

	'welcome_body' => "ขอบคุณที่ได้สมัครสมาชิกกับเราที่ ^site_title.\n\n^custom^confirmรายละเอียดข้อมูลขอคุณมีดังนี้:\n\nUsername: ^handle\nEmail: ^email\n\nกรุณาเก็บข้อมูลนี้ไว้ในที่ปลอดภัย อย่าให้ผู้อื่นรู้ข้อมูลดังกล่าว.\n\nขอบคุณ,\n\n^site_title\n^url",
	'welcome_confirm' => "กรุณาคลิ๊กที่ลิงค์ด้านล่างเพื่อยืนยันอีเมล์ของคุณ @Answer.in.th.\n\n^url\n\n",
	'welcome_subject' => 'ยินดีต้อนรับสู่ ^site_title!',
);
