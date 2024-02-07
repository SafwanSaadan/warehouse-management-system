# استخدم صورة أساسية لـ PHP مع Apache
FROM php:7.4-apache

# إعداد الدليل العمل
WORKDIR /var/www/html

# إضافة مكونات PHP إضافية إذا لزم الأمر
# RUN docker-php-ext-install ...

# تثبيت مكون MySQLi
RUN docker-php-ext-install mysqli

# تحديث تكوين Apache للسماح بمعالجة ملفات PHP
# RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
# RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf
# RUN a2enmod rewrite

# نسخ ملفات التطبيق إلى الدليل الافتراضي لـ Apache (/var/www/html)
COPY . .

# فتح منفذ 80 لـ Apache
EXPOSE 80

# تشغيل Apache عند بدء تشغيل الحاوية
CMD ["apache2-foreground"]
