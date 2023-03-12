***********
Bai1:
Khai báo module mới cho Magento:
Khai báo lại các file composer.json, registration.php, module.xml
Sau khi khai báo thì tiến hành active module mới để kiểm tra module đã được tạo hay chưa:
************
    php bin/magento module:status 
    php bin/magento module:enable module_name 
    update lại DB: magento setup:upgrade
    php bin/magento setup:static-content:deploy -f
    php bin/magento c:f
    php bin/magento cache:clean

***********
Bai2:
Khai báo, sử dụng Controller
Khai báo Controller trỏ vào từ font_end:
    Tạo file routes.xml theo chỉ mục :Name_module>etc>frontend>routes.xml
    
************

    <route id="bai1" frontName="bai1">
        <module name="Robin_Bai1" />
    </route>
    trong đó FrontName được sử dụng để làm chỉ mục cho con trỏ trỏ vào từ fontend
    
    file layout khai báo có cú pháp tenmodule_controller_classcontroller:
    vd: testcontroller_index_index.xml (testcontroller là tên module, index(1) folder,index(2) là đường dẫn đến khai báo class controller)
    helloworld_index_display (helloworld là tên module, index(1) folder,display(2) là đường dẫn đến khai báo class controller)
****
Bai3: tao menu admin trong magento2
***************
    menu trong magento được cấu hình trong file etc-> adminxml ->menu.xml
    <add id="Mageplaza_HelloWorld::helloworld" title="Hello World" module="Mageplaza_HelloWorld" sortOrder="51" resource="Mageplaza_HelloWorld::helloworld"/>
    -id đảm bảo là duy nhất trong mỗi module id="Mageplaza_HelloWorld::helloworld" (tìm id =helloworld trong module Mageplaza_HelloWorld)
    -title là hiển thị của menu 
    -resource phân quyền menu ACL cho người dùng
    
