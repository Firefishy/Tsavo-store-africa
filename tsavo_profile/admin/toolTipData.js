var FiltersEnabled = 0; // if your not going to use transitions or filters in any of the tips set this to 0
var spacer="&nbsp; &nbsp; &nbsp; ";

// email notifications to admin
notifyAdminNewMembers0Tip=["", spacer+"No email notifications to admin."];
notifyAdminNewMembers1Tip=["", spacer+"Notify admin only when a new member is waiting for approval."];
notifyAdminNewMembers2Tip=["", spacer+"Notify admin for all new sign-ups."];

// visitorSignup
visitorSignup0Tip=["", spacer+"If this option is selected, visitors will not be able to join this group unless the admin manually moves them to this group from the admin area."];
visitorSignup1Tip=["", spacer+"If this option is selected, visitors can join this group but will not be able to sign in unless the admin approves them from the admin area."];
visitorSignup2Tip=["", spacer+"If this option is selected, visitors can join this group and will be able to sign in instantly with no need for admin approval."];

// staff table
staff_addTip=["",spacer+"This option allows all members of the group to add records to the 'Staff' table. A member who adds a record to the table becomes the 'owner' of that record."];

staff_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Staff' table."];
staff_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Staff' table."];
staff_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Staff' table."];
staff_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Staff' table."];

staff_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Staff' table."];
staff_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Staff' table."];
staff_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Staff' table."];
staff_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Staff' table, regardless of their owner."];

staff_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Staff' table."];
staff_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Staff' table."];
staff_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Staff' table."];
staff_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Staff' table."];

// board_member table
board_member_addTip=["",spacer+"This option allows all members of the group to add records to the 'Board member' table. A member who adds a record to the table becomes the 'owner' of that record."];

board_member_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Board member' table."];
board_member_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Board member' table."];
board_member_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Board member' table."];
board_member_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Board member' table."];

board_member_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Board member' table."];
board_member_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Board member' table."];
board_member_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Board member' table."];
board_member_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Board member' table, regardless of their owner."];

board_member_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Board member' table."];
board_member_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Board member' table."];
board_member_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Board member' table."];
board_member_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Board member' table."];

// about_us table
about_us_addTip=["",spacer+"This option allows all members of the group to add records to the 'About us' table. A member who adds a record to the table becomes the 'owner' of that record."];

about_us_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'About us' table."];
about_us_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'About us' table."];
about_us_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'About us' table."];
about_us_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'About us' table."];

about_us_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'About us' table."];
about_us_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'About us' table."];
about_us_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'About us' table."];
about_us_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'About us' table, regardless of their owner."];

about_us_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'About us' table."];
about_us_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'About us' table."];
about_us_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'About us' table."];
about_us_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'About us' table."];

// privacy_policy table
privacy_policy_addTip=["",spacer+"This option allows all members of the group to add records to the 'Privacy policy' table. A member who adds a record to the table becomes the 'owner' of that record."];

privacy_policy_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Privacy policy' table."];
privacy_policy_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Privacy policy' table."];
privacy_policy_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Privacy policy' table."];
privacy_policy_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Privacy policy' table."];

privacy_policy_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Privacy policy' table."];
privacy_policy_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Privacy policy' table."];
privacy_policy_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Privacy policy' table."];
privacy_policy_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Privacy policy' table, regardless of their owner."];

privacy_policy_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Privacy policy' table."];
privacy_policy_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Privacy policy' table."];
privacy_policy_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Privacy policy' table."];
privacy_policy_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Privacy policy' table."];

// terms_conditions table
terms_conditions_addTip=["",spacer+"This option allows all members of the group to add records to the 'Privacy policy' table. A member who adds a record to the table becomes the 'owner' of that record."];

terms_conditions_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Privacy policy' table."];
terms_conditions_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Privacy policy' table."];
terms_conditions_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Privacy policy' table."];
terms_conditions_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Privacy policy' table."];

terms_conditions_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Privacy policy' table."];
terms_conditions_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Privacy policy' table."];
terms_conditions_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Privacy policy' table."];
terms_conditions_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Privacy policy' table, regardless of their owner."];

terms_conditions_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Privacy policy' table."];
terms_conditions_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Privacy policy' table."];
terms_conditions_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Privacy policy' table."];
terms_conditions_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Privacy policy' table."];

// return_policy table
return_policy_addTip=["",spacer+"This option allows all members of the group to add records to the 'Return policy' table. A member who adds a record to the table becomes the 'owner' of that record."];

return_policy_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Return policy' table."];
return_policy_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Return policy' table."];
return_policy_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Return policy' table."];
return_policy_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Return policy' table."];

return_policy_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Return policy' table."];
return_policy_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Return policy' table."];
return_policy_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Return policy' table."];
return_policy_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Return policy' table, regardless of their owner."];

return_policy_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Return policy' table."];
return_policy_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Return policy' table."];
return_policy_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Return policy' table."];
return_policy_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Return policy' table."];

/*
	Style syntax:
	-------------
	[TitleColor,TextColor,TitleBgColor,TextBgColor,TitleBgImag,TextBgImag,TitleTextAlign,
	TextTextAlign,TitleFontFace,TextFontFace, TipPosition, StickyStyle, TitleFontSize,
	TextFontSize, Width, Height, BorderSize, PadTextArea, CoordinateX , CoordinateY,
	TransitionNumber, TransitionDuration, TransparencyLevel ,ShadowType, ShadowColor]

*/

toolTipStyle=["white","#00008B","#000099","#E6E6FA","","images/helpBg.gif","","","","\"Trebuchet MS\", sans-serif","","","","3",400,"",1,2,10,10,51,1,0,"",""];

applyCssFilter();
