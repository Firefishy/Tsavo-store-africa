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

// system_setting table
system_setting_addTip=["",spacer+"This option allows all members of the group to add records to the 'System_setting' table. A member who adds a record to the table becomes the 'owner' of that record."];

system_setting_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'System_setting' table."];
system_setting_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'System_setting' table."];
system_setting_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'System_setting' table."];
system_setting_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'System_setting' table."];

system_setting_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'System_setting' table."];
system_setting_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'System_setting' table."];
system_setting_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'System_setting' table."];
system_setting_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'System_setting' table, regardless of their owner."];

system_setting_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'System_setting' table."];
system_setting_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'System_setting' table."];
system_setting_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'System_setting' table."];
system_setting_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'System_setting' table."];

// supplier table
supplier_addTip=["",spacer+"This option allows all members of the group to add records to the 'Supplier' table. A member who adds a record to the table becomes the 'owner' of that record."];

supplier_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Supplier' table."];
supplier_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Supplier' table."];
supplier_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Supplier' table."];
supplier_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Supplier' table."];

supplier_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Supplier' table."];
supplier_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Supplier' table."];
supplier_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Supplier' table."];
supplier_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Supplier' table, regardless of their owner."];

supplier_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Supplier' table."];
supplier_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Supplier' table."];
supplier_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Supplier' table."];
supplier_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Supplier' table."];

// products table
products_addTip=["",spacer+"This option allows all members of the group to add records to the 'Products' table. A member who adds a record to the table becomes the 'owner' of that record."];

products_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Products' table."];
products_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Products' table."];
products_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Products' table."];
products_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Products' table."];

products_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Products' table."];
products_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Products' table."];
products_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Products' table."];
products_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Products' table, regardless of their owner."];

products_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Products' table."];
products_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Products' table."];
products_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Products' table."];
products_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Products' table."];

// details table
details_addTip=["",spacer+"This option allows all members of the group to add records to the 'Details' table. A member who adds a record to the table becomes the 'owner' of that record."];

details_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Details' table."];
details_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Details' table."];
details_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Details' table."];
details_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Details' table."];

details_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Details' table."];
details_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Details' table."];
details_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Details' table."];
details_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Details' table, regardless of their owner."];

details_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Details' table."];
details_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Details' table."];
details_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Details' table."];
details_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Details' table."];

// category table
category_addTip=["",spacer+"This option allows all members of the group to add records to the 'Category' table. A member who adds a record to the table becomes the 'owner' of that record."];

category_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Category' table."];
category_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Category' table."];
category_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Category' table."];
category_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Category' table."];

category_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Category' table."];
category_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Category' table."];
category_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Category' table."];
category_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Category' table, regardless of their owner."];

category_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Category' table."];
category_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Category' table."];
category_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Category' table."];
category_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Category' table."];

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
