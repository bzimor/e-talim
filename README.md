# O'rnatish tartibi:

composer update
/public/.htaccess.example faylidan /public/.htaccess tarzida nusxa oling
.env.example faylidan .env tarzida nusxa oling
php yii security/app-key orqali key generatsiya qiling
mysql baza yaratib uni masalan e-talim deb nomlang
.env fayliga kerakli baza haqida ma'lumotlarni kiriting
quyidagi buyruqlarni kiriting:
php yii migrate
php yii fixture/load User
php yii rbac/init
php yii rbac/assign-master 1
php yii rbac/scan
php yii rbac/scan --path=@vendor/justcoded/yii2-rbac/ --routesBase=admin/rbac/

User:    admin@e-talim.uz
Parol:   password_0

