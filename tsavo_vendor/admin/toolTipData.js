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

// sales table
sales_addTip=["",spacer+"This option allows all members of the group to add records to the 'Orders Made' table. A member who adds a record to the table becomes the 'owner' of that record."];

sales_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Orders Made' table."];
sales_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Orders Made' table."];
sales_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Orders Made' table."];
sales_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Orders Made' table."];

sales_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Orders Made' table."];
sales_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Orders Made' table."];
sales_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Orders Made' table."];
sales_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Orders Made' table, regardless of their owner."];

sales_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Orders Made' table."];
sales_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Orders Made' table."];
sales_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Orders Made' table."];
sales_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Orders Made' table."];

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

// category table
category_addTip=["",spacer+"This option allows all members of the group to add records to the 'Product Category' table. A member who adds a record to the table becomes the 'owner' of that record."];

category_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Product Category' table."];
category_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Product Category' table."];
category_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Product Category' table."];
category_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Product Category' table."];

category_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Product Category' table."];
category_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Product Category' table."];
category_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Product Category' table."];
category_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Product Category' table, regardless of their owner."];

category_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Product Category' table."];
category_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Product Category' table."];
category_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Product Category' table."];
category_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Product Category' table."];

// supplier table
supplier_addTip=["",spacer+"This option allows all members of the group to add records to the 'Vendor' table. A member who adds a record to the table becomes the 'owner' of that record."];

supplier_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Vendor' table."];
supplier_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Vendor' table."];
supplier_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Vendor' table."];
supplier_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Vendor' table."];

supplier_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Vendor' table."];
supplier_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Vendor' table."];
supplier_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Vendor' table."];
supplier_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Vendor' table, regardless of their owner."];

supplier_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Vendor' table."];
supplier_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Vendor' table."];
supplier_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Vendor' table."];
supplier_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Vendor' table."];

// users table
users_addTip=["",spacer+"This option allows all members of the group to add records to the 'Users/Members' table. A member who adds a record to the table becomes the 'owner' of that record."];

users_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Users/Members' table."];
users_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Users/Members' table."];
users_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Users/Members' table."];
users_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Users/Members' table."];

users_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Users/Members' table."];
users_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Users/Members' table."];
users_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Users/Members' table."];
users_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Users/Members' table, regardless of their owner."];

users_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Users/Members' table."];
users_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Users/Members' table."];
users_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Users/Members' table."];
users_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Users/Members' table."];

// stock table
stock_addTip=["",spacer+"This option allows all members of the group to add records to the 'Stock' table. A member who adds a record to the table becomes the 'owner' of that record."];

stock_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Stock' table."];
stock_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Stock' table."];
stock_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Stock' table."];
stock_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Stock' table."];

stock_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Stock' table."];
stock_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Stock' table."];
stock_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Stock' table."];
stock_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Stock' table, regardless of their owner."];

stock_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Stock' table."];
stock_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Stock' table."];
stock_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Stock' table."];
stock_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Stock' table."];

// agent table
agent_addTip=["",spacer+"This option allows all members of the group to add records to the 'Tsavo Agent' table. A member who adds a record to the table becomes the 'owner' of that record."];

agent_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Tsavo Agent' table."];
agent_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Tsavo Agent' table."];
agent_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Tsavo Agent' table."];
agent_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Tsavo Agent' table."];

agent_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Tsavo Agent' table."];
agent_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Tsavo Agent' table."];
agent_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Tsavo Agent' table."];
agent_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Tsavo Agent' table, regardless of their owner."];

agent_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Tsavo Agent' table."];
agent_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Tsavo Agent' table."];
agent_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Tsavo Agent' table."];
agent_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Tsavo Agent' table."];

// male_shoes table
male_shoes_addTip=["",spacer+"This option allows all members of the group to add records to the 'Male shoes' table. A member who adds a record to the table becomes the 'owner' of that record."];

male_shoes_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Male shoes' table."];
male_shoes_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Male shoes' table."];
male_shoes_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Male shoes' table."];
male_shoes_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Male shoes' table."];

male_shoes_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Male shoes' table."];
male_shoes_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Male shoes' table."];
male_shoes_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Male shoes' table."];
male_shoes_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Male shoes' table, regardless of their owner."];

male_shoes_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Male shoes' table."];
male_shoes_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Male shoes' table."];
male_shoes_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Male shoes' table."];
male_shoes_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Male shoes' table."];

// male_pants table
male_pants_addTip=["",spacer+"This option allows all members of the group to add records to the 'Male pants' table. A member who adds a record to the table becomes the 'owner' of that record."];

male_pants_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Male pants' table."];
male_pants_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Male pants' table."];
male_pants_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Male pants' table."];
male_pants_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Male pants' table."];

male_pants_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Male pants' table."];
male_pants_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Male pants' table."];
male_pants_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Male pants' table."];
male_pants_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Male pants' table, regardless of their owner."];

male_pants_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Male pants' table."];
male_pants_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Male pants' table."];
male_pants_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Male pants' table."];
male_pants_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Male pants' table."];

// male_shirts table
male_shirts_addTip=["",spacer+"This option allows all members of the group to add records to the 'Male shirts' table. A member who adds a record to the table becomes the 'owner' of that record."];

male_shirts_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Male shirts' table."];
male_shirts_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Male shirts' table."];
male_shirts_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Male shirts' table."];
male_shirts_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Male shirts' table."];

male_shirts_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Male shirts' table."];
male_shirts_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Male shirts' table."];
male_shirts_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Male shirts' table."];
male_shirts_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Male shirts' table, regardless of their owner."];

male_shirts_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Male shirts' table."];
male_shirts_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Male shirts' table."];
male_shirts_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Male shirts' table."];
male_shirts_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Male shirts' table."];

// female_shoes table
female_shoes_addTip=["",spacer+"This option allows all members of the group to add records to the 'Female shoes' table. A member who adds a record to the table becomes the 'owner' of that record."];

female_shoes_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Female shoes' table."];
female_shoes_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Female shoes' table."];
female_shoes_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Female shoes' table."];
female_shoes_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Female shoes' table."];

female_shoes_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Female shoes' table."];
female_shoes_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Female shoes' table."];
female_shoes_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Female shoes' table."];
female_shoes_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Female shoes' table, regardless of their owner."];

female_shoes_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Female shoes' table."];
female_shoes_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Female shoes' table."];
female_shoes_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Female shoes' table."];
female_shoes_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Female shoes' table."];

// female_dresses table
female_dresses_addTip=["",spacer+"This option allows all members of the group to add records to the 'Female dresses' table. A member who adds a record to the table becomes the 'owner' of that record."];

female_dresses_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Female dresses' table."];
female_dresses_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Female dresses' table."];
female_dresses_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Female dresses' table."];
female_dresses_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Female dresses' table."];

female_dresses_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Female dresses' table."];
female_dresses_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Female dresses' table."];
female_dresses_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Female dresses' table."];
female_dresses_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Female dresses' table, regardless of their owner."];

female_dresses_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Female dresses' table."];
female_dresses_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Female dresses' table."];
female_dresses_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Female dresses' table."];
female_dresses_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Female dresses' table."];

// female_skirts table
female_skirts_addTip=["",spacer+"This option allows all members of the group to add records to the 'Female skirts' table. A member who adds a record to the table becomes the 'owner' of that record."];

female_skirts_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Female skirts' table."];
female_skirts_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Female skirts' table."];
female_skirts_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Female skirts' table."];
female_skirts_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Female skirts' table."];

female_skirts_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Female skirts' table."];
female_skirts_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Female skirts' table."];
female_skirts_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Female skirts' table."];
female_skirts_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Female skirts' table, regardless of their owner."];

female_skirts_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Female skirts' table."];
female_skirts_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Female skirts' table."];
female_skirts_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Female skirts' table."];
female_skirts_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Female skirts' table."];

// female_pants table
female_pants_addTip=["",spacer+"This option allows all members of the group to add records to the 'Female pants' table. A member who adds a record to the table becomes the 'owner' of that record."];

female_pants_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Female pants' table."];
female_pants_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Female pants' table."];
female_pants_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Female pants' table."];
female_pants_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Female pants' table."];

female_pants_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Female pants' table."];
female_pants_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Female pants' table."];
female_pants_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Female pants' table."];
female_pants_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Female pants' table, regardless of their owner."];

female_pants_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Female pants' table."];
female_pants_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Female pants' table."];
female_pants_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Female pants' table."];
female_pants_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Female pants' table."];

// details table
details_addTip=["",spacer+"This option allows all members of the group to add records to the 'Order Details' table. A member who adds a record to the table becomes the 'owner' of that record."];

details_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Order Details' table."];
details_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Order Details' table."];
details_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Order Details' table."];
details_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Order Details' table."];

details_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Order Details' table."];
details_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Order Details' table."];
details_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Order Details' table."];
details_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Order Details' table, regardless of their owner."];

details_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Order Details' table."];
details_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Order Details' table."];
details_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Order Details' table."];
details_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Order Details' table."];

// branches table
branches_addTip=["",spacer+"This option allows all members of the group to add records to the 'Delivery Branches' table. A member who adds a record to the table becomes the 'owner' of that record."];

branches_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Delivery Branches' table."];
branches_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Delivery Branches' table."];
branches_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Delivery Branches' table."];
branches_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Delivery Branches' table."];

branches_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Delivery Branches' table."];
branches_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Delivery Branches' table."];
branches_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Delivery Branches' table."];
branches_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Delivery Branches' table, regardless of their owner."];

branches_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Delivery Branches' table."];
branches_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Delivery Branches' table."];
branches_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Delivery Branches' table."];
branches_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Delivery Branches' table."];

// agent_monitor table
agent_monitor_addTip=["",spacer+"This option allows all members of the group to add records to the 'Agent Order monitor' table. A member who adds a record to the table becomes the 'owner' of that record."];

agent_monitor_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Agent Order monitor' table."];
agent_monitor_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Agent Order monitor' table."];
agent_monitor_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Agent Order monitor' table."];
agent_monitor_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Agent Order monitor' table."];

agent_monitor_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Agent Order monitor' table."];
agent_monitor_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Agent Order monitor' table."];
agent_monitor_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Agent Order monitor' table."];
agent_monitor_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Agent Order monitor' table, regardless of their owner."];

agent_monitor_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Agent Order monitor' table."];
agent_monitor_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Agent Order monitor' table."];
agent_monitor_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Agent Order monitor' table."];
agent_monitor_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Agent Order monitor' table."];

// coupon table
coupon_addTip=["",spacer+"This option allows all members of the group to add records to the 'Coupons' table. A member who adds a record to the table becomes the 'owner' of that record."];

coupon_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Coupons' table."];
coupon_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Coupons' table."];
coupon_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Coupons' table."];
coupon_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Coupons' table."];

coupon_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Coupons' table."];
coupon_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Coupons' table."];
coupon_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Coupons' table."];
coupon_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Coupons' table, regardless of their owner."];

coupon_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Coupons' table."];
coupon_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Coupons' table."];
coupon_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Coupons' table."];
coupon_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Coupons' table."];

// cart table
cart_addTip=["",spacer+"This option allows all members of the group to add records to the 'Cart' table. A member who adds a record to the table becomes the 'owner' of that record."];

cart_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Cart' table."];
cart_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Cart' table."];
cart_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Cart' table."];
cart_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Cart' table."];

cart_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Cart' table."];
cart_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Cart' table."];
cart_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Cart' table."];
cart_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Cart' table, regardless of their owner."];

cart_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Cart' table."];
cart_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Cart' table."];
cart_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Cart' table."];
cart_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Cart' table."];

// drop_off table
drop_off_addTip=["",spacer+"This option allows all members of the group to add records to the 'Drop off Points' table. A member who adds a record to the table becomes the 'owner' of that record."];

drop_off_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Drop off Points' table."];
drop_off_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Drop off Points' table."];
drop_off_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Drop off Points' table."];
drop_off_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Drop off Points' table."];

drop_off_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Drop off Points' table."];
drop_off_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Drop off Points' table."];
drop_off_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Drop off Points' table."];
drop_off_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Drop off Points' table, regardless of their owner."];

drop_off_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Drop off Points' table."];
drop_off_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Drop off Points' table."];
drop_off_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Drop off Points' table."];
drop_off_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Drop off Points' table."];

// how_to_vendor table
how_to_vendor_addTip=["",spacer+"This option allows all members of the group to add records to the 'Vendor Guide' table. A member who adds a record to the table becomes the 'owner' of that record."];

how_to_vendor_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Vendor Guide' table."];
how_to_vendor_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Vendor Guide' table."];
how_to_vendor_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Vendor Guide' table."];
how_to_vendor_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Vendor Guide' table."];

how_to_vendor_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Vendor Guide' table."];
how_to_vendor_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Vendor Guide' table."];
how_to_vendor_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Vendor Guide' table."];
how_to_vendor_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Vendor Guide' table, regardless of their owner."];

how_to_vendor_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Vendor Guide' table."];
how_to_vendor_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Vendor Guide' table."];
how_to_vendor_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Vendor Guide' table."];
how_to_vendor_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Vendor Guide' table."];

// how_to_agent table
how_to_agent_addTip=["",spacer+"This option allows all members of the group to add records to the 'Agent Guide' table. A member who adds a record to the table becomes the 'owner' of that record."];

how_to_agent_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Agent Guide' table."];
how_to_agent_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Agent Guide' table."];
how_to_agent_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Agent Guide' table."];
how_to_agent_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Agent Guide' table."];

how_to_agent_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Agent Guide' table."];
how_to_agent_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Agent Guide' table."];
how_to_agent_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Agent Guide' table."];
how_to_agent_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Agent Guide' table, regardless of their owner."];

how_to_agent_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Agent Guide' table."];
how_to_agent_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Agent Guide' table."];
how_to_agent_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Agent Guide' table."];
how_to_agent_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Agent Guide' table."];

// message table
message_addTip=["",spacer+"This option allows all members of the group to add records to the 'Message' table. A member who adds a record to the table becomes the 'owner' of that record."];

message_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Message' table."];
message_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Message' table."];
message_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Message' table."];
message_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Message' table."];

message_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Message' table."];
message_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Message' table."];
message_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Message' table."];
message_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Message' table, regardless of their owner."];

message_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Message' table."];
message_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Message' table."];
message_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Message' table."];
message_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Message' table."];

// sales_monitor table
sales_monitor_addTip=["",spacer+"This option allows all members of the group to add records to the 'Sales monitor' table. A member who adds a record to the table becomes the 'owner' of that record."];

sales_monitor_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Sales monitor' table."];
sales_monitor_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Sales monitor' table."];
sales_monitor_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Sales monitor' table."];
sales_monitor_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Sales monitor' table."];

sales_monitor_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Sales monitor' table."];
sales_monitor_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Sales monitor' table."];
sales_monitor_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Sales monitor' table."];
sales_monitor_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Sales monitor' table, regardless of their owner."];

sales_monitor_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Sales monitor' table."];
sales_monitor_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Sales monitor' table."];
sales_monitor_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Sales monitor' table."];
sales_monitor_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Sales monitor' table."];

// wishlist table
wishlist_addTip=["",spacer+"This option allows all members of the group to add records to the 'Wishlist' table. A member who adds a record to the table becomes the 'owner' of that record."];

wishlist_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Wishlist' table."];
wishlist_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Wishlist' table."];
wishlist_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Wishlist' table."];
wishlist_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Wishlist' table."];

wishlist_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Wishlist' table."];
wishlist_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Wishlist' table."];
wishlist_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Wishlist' table."];
wishlist_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Wishlist' table, regardless of their owner."];

wishlist_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Wishlist' table."];
wishlist_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Wishlist' table."];
wishlist_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Wishlist' table."];
wishlist_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Wishlist' table."];

// sub_cat table
sub_cat_addTip=["",spacer+"This option allows all members of the group to add records to the 'Sub cat' table. A member who adds a record to the table becomes the 'owner' of that record."];

sub_cat_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Sub cat' table."];
sub_cat_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Sub cat' table."];
sub_cat_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Sub cat' table."];
sub_cat_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Sub cat' table."];

sub_cat_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Sub cat' table."];
sub_cat_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Sub cat' table."];
sub_cat_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Sub cat' table."];
sub_cat_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Sub cat' table, regardless of their owner."];

sub_cat_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Sub cat' table."];
sub_cat_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Sub cat' table."];
sub_cat_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Sub cat' table."];
sub_cat_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Sub cat' table."];

// item_rating table
item_rating_addTip=["",spacer+"This option allows all members of the group to add records to the 'Item rating' table. A member who adds a record to the table becomes the 'owner' of that record."];

item_rating_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Item rating' table."];
item_rating_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Item rating' table."];
item_rating_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Item rating' table."];
item_rating_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Item rating' table."];

item_rating_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Item rating' table."];
item_rating_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Item rating' table."];
item_rating_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Item rating' table."];
item_rating_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Item rating' table, regardless of their owner."];

item_rating_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Item rating' table."];
item_rating_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Item rating' table."];
item_rating_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Item rating' table."];
item_rating_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Item rating' table."];

// followers table
followers_addTip=["",spacer+"This option allows all members of the group to add records to the 'Followers' table. A member who adds a record to the table becomes the 'owner' of that record."];

followers_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Followers' table."];
followers_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Followers' table."];
followers_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Followers' table."];
followers_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Followers' table."];

followers_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Followers' table."];
followers_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Followers' table."];
followers_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Followers' table."];
followers_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Followers' table, regardless of their owner."];

followers_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Followers' table."];
followers_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Followers' table."];
followers_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Followers' table."];
followers_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Followers' table."];

// sub_cat_2 table
sub_cat_2_addTip=["",spacer+"This option allows all members of the group to add records to the 'Sub cat 2' table. A member who adds a record to the table becomes the 'owner' of that record."];

sub_cat_2_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Sub cat 2' table."];
sub_cat_2_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Sub cat 2' table."];
sub_cat_2_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Sub cat 2' table."];
sub_cat_2_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Sub cat 2' table."];

sub_cat_2_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Sub cat 2' table."];
sub_cat_2_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Sub cat 2' table."];
sub_cat_2_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Sub cat 2' table."];
sub_cat_2_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Sub cat 2' table, regardless of their owner."];

sub_cat_2_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Sub cat 2' table."];
sub_cat_2_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Sub cat 2' table."];
sub_cat_2_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Sub cat 2' table."];
sub_cat_2_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Sub cat 2' table."];

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
