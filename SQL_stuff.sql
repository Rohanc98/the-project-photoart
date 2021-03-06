
Insert Into Product(description, imageLink, price, timesOrdered, upc, title, category) values("A walk in the lush, green forest","../client_side/images/Nature/Forest.jpg",39.99,0,1,"Forest","Nature");
Insert Into Product(description, imageLink, price, timesOrdered, upc, title, category) values("A beautiful creek with a small waterfall in the distance","../client_side/images/Nature/creek.jpg",44.99,0,2,"Creek","Nature");
Insert Into Product(description, imageLink, price, timesOrdered, upc, title, category) values("Crops with a view of mountains in the background","../client_side/images/Nature/crops.jpg",37.99,0,3,"Crops","Nature");
Insert Into Product(description, imageLink, price, timesOrdered, upc, title, category) values("The squirrel, nature's savers, having a bite to eat","../client_side/images/Nature/squirrel.jpg",28.99,0,4,"Squirrel","Nature");
Insert Into Product(description, imageLink, price, timesOrdered, upc, title, category) values("Stunning trees from a low-angle in the night","../client_side/images/Nature/trees.jpg",47.99,0,5,"Trees","Nature");

Insert Into Product(description, imageLink, price, timesOrdered, upc, title, category) values("A balanced breakfast is key to a great day","../client_side/images/Abstract/breakfast.jpg",29.99,0,6,"Breakfast","Abstract");
Insert Into Product(description, imageLink, price, timesOrdered, upc, title, category) values("A modern home with an array of plants","../client_side/images/Abstract/house.jpg",24.99,0,7,"Home","Abstract");
Insert Into Product(description, imageLink, price, timesOrdered, upc, title, category) values("A festive pumpkin to represent fall","../client_side/images/Abstract/pumpkin.jpg",34.99,0,8,"Pumpkin","Abstract");
Insert Into Product(description, imageLink, price, timesOrdered, upc, title, category) values("Fire represents warmth and life","../client_side/images/Abstract/fire.jpg",49.99,0,9,"Fire","Abstract");
Insert Into Product(description, imageLink, price, timesOrdered, upc, title, category) values("An old fence with greenery growing around it","../client_side/images/Abstract/fence.jpg",39.99,0,10,"Fence","Abstract");

Insert Into Product(description, imageLink, price, timesOrdered, upc, title, category) values("A view of a vast woodland area","../client_side/images/Landscape/forrestry.jpg",29.99,0,11,"Woods","Landscape");
Insert Into Product(description, imageLink, price, timesOrdered, upc, title, category) values("An aeriel view of the clear Okanagan lake","../client_side/images/Landscape/lake.jpg",27.99,0,12,"Lake","Landscape");
Insert Into Product(description, imageLink, price, timesOrdered, upc, title, category) values("Diverse plant life along the mountain side","../client_side/images/Landscape/mountain.jpg",19.99,0,13,"Mountain","Landscape");
Insert Into Product(description, imageLink, price, timesOrdered, upc, title, category) values("A view of nature nature meeting industrialized features such as power lines","../client_side/images/Landscape/powerlines.jpg",34.99,0,14,"Power lines","Landscape");
Insert Into Product(description, imageLink, price, timesOrdered, upc, title, category) values("A look at the Kelowna skyline with the lake in the background","../client_side/images/Landscape/skyline.jpg",31.99,0,15,"Skyline","Landscape");
Insert Into Product(description, imageLink, price, timesOrdered, upc, title, category) values("Steep rock faces on a clear day","../client_side/images/Landscape/slopes.jpg",30.99,0,16,"Slopes","Landscape");
Insert Into Product(description, imageLink, price, timesOrdered, upc, title, category) values("A look at the deep Okanagan valley on a cloudy day","../client_side/images/Landscape/valley.jpg",28.99,0,17,"Valley","Landscape");

Insert Into Product(description, imageLink, price, timesOrdered, upc, title, category) values("Mowgli, the three-year old Bischon Shih-tzu Poodle","../client_side/images/Dogs/Mowgli.jpg",39.99,0,18,"Mowgli","Dogs");
Insert Into Product(description, imageLink, price, timesOrdered, upc, title, category) values("Tank are Mowgli are best friends and like to nap together","../client_side/images/Dogs/MowTank.jpg",41.99,0,19,"Tank & Mowgli","Dogs");
Insert Into Product(description, imageLink, price, timesOrdered, upc, title, category) values("Opi, the five-year old English Bulldog","../client_side/images/Dogs/Opi.jpg",34.99,0,20,"Opi","Dogs");
Insert Into Product(description, imageLink, price, timesOrdered, upc, title, category) values("Tank, the chubby, seven year old, Bischon Shih-tzu","../client_side/images/Dogs/Tank.jpg",37.99,0,21,"Tank","Dogs");
Insert Into Product(description, imageLink, price, timesOrdered, upc, title, category) values("Thunder, the baby Malti-Poo Affen-Pinscher","../client_side/images/Dogs/Thunder.jpg",29.99,0,22,"Thunder","Dogs");
Insert Into Product(description, imageLink, price, timesOrdered, upc, title, category) values("The whole herd of dogs; Mowgli, Thunder, Tank, and Sassy","../client_side/images/Dogs/WholeGang.jpg",45.99,0,23,"Whole Herd","Dogs");

Insert Into Warehouse(name, address, city, province, country) values ("Big Warehouse", "123 Rowdy Road", "Kelowna","BC","Canada");
Insert Into StoredAt(upc, warehouse, quantity) values (1, "Big Warehouse", 3);  
Insert Into StoredAt(upc, warehouse, quantity) values (2, "Big Warehouse", 7);  
Insert Into StoredAt(upc, warehouse, quantity) values (3, "Big Warehouse", 2);  
Insert Into StoredAt(upc, warehouse, quantity) values (4, "Big Warehouse", 8);  
Insert Into StoredAt(upc, warehouse, quantity) values (5, "Big Warehouse", 9);  
Insert Into StoredAt(upc, warehouse, quantity) values (6, "Big Warehouse", 10);  
Insert Into StoredAt(upc, warehouse, quantity) values (7, "Big Warehouse", 2);  
Insert Into StoredAt(upc, warehouse, quantity) values (8, "Big Warehouse", 3);  
Insert Into StoredAt(upc, warehouse, quantity) values (9, "Big Warehouse", 5);  
Insert Into StoredAt(upc, warehouse, quantity) values (10, "Big Warehouse", 4);  
Insert Into StoredAt(upc, warehouse, quantity) values (11, "Big Warehouse", 6);  
Insert Into StoredAt(upc, warehouse, quantity) values (12, "Big Warehouse", 8);  
Insert Into StoredAt(upc, warehouse, quantity) values (13, "Big Warehouse", 6);  
Insert Into StoredAt(upc, warehouse, quantity) values (14, "Big Warehouse", 7);  
Insert Into StoredAt(upc, warehouse, quantity) values (15, "Big Warehouse", 11);  
Insert Into StoredAt(upc, warehouse, quantity) values (16, "Big Warehouse", 12);  
Insert Into StoredAt(upc, warehouse, quantity) values (17, "Big Warehouse", 14);  
Insert Into StoredAt(upc, warehouse, quantity) values (18, "Big Warehouse", 5);  
Insert Into StoredAt(upc, warehouse, quantity) values (19, "Big Warehouse", 4);  
Insert Into StoredAt(upc, warehouse, quantity) values (20, "Big Warehouse", 9);  
Insert Into StoredAt(upc, warehouse, quantity) values (21, "Big Warehouse", 3);  
Insert Into StoredAt(upc, warehouse, quantity) values (22, "Big Warehouse", 13);  
Insert Into StoredAt(upc, warehouse, quantity) values (23, "Big Warehouse", 5);  

