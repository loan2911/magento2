***********
Bai1:
Khai báo module mới cho Magento:
Khai báo lại các file composer.json, registration.php, module.xml
Sau khi khai báo thì tiến hành active module mới để kiểm tra module đã được tạo hay chưa:
************
    -php bin/magento module:status 
    -php bin/magento module:enable module_name 
    -update lại DB: magento setup:upgrade
***********
Bai2:
Khai báo, sử dụng Controller
Khai báo Controller trỏ vào từ font_end:
    Tạo file routes.xml theo chỉ mục :Name_module>etc>frontend>routes.xml
    
************

    <route id="bai1" frontName="bai1">
        <module name="Robin_Bai1" />
    </route>

****
    trong đó FrontName được sử dụng để làm chỉ mục cho con trỏ trỏ vào từ fontend
