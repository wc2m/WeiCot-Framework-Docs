
# WeiCot Framework 快速开发教程 -框架的nginx或Apache规则配置文件
### WeiCot Framework  快速开发教程 -www.weicot.com 

###  Nginx 环境配置文件  以lnmp 为例


### nginx 下 WeiCot Framework主配置文件  /etc/nginx/WeiCotFramework.conf

```lua
location / {
        index index.html index.php; ## Allow a static html file to be shown first
        try_files $uri $uri/ @handler; ## If missing pass the URI to Magento's front handler
        expires 30d; ## Assume all files are cachable
    }
 
    ## These locations would be hidden by .htaccess normally
    location /app/                { deny all; }
    location /includes/           { deny all; }
    location /lib/                { deny all; }
    location /media/downloadable/ { deny all; }
    location /pkginfo/            { deny all; }
    location /report/config.xml   { deny all; }
    location /var/                { deny all; }
 
    location /var/export/ { ## Allow admins only to view export folder
        auth_basic           "Restricted"; ## Message shown in login window
        auth_basic_user_file htpasswd; ## See /etc/nginx/htpassword
        autoindex            on;
    }
      location  /. { ## Disable .htaccess and other hidden files
        return 404;
    }
 
    location @handler { ## Magento uses a common front handler
        rewrite / /index.php;
    }
 
    location ~ .php/ { ## Forward paths like /js/index.php/x.js to relevant handler
        rewrite ^(.*.php)/ $1 last;
    }
```



#### lnmp  下 WeiCot Framework 虚拟配置文件位置   /etc/nginx/vhost/wf.conf
```lua
server
    {
        listen 80;
        #listen [::]:80;
        server_name s1.weicot.com;
        index index.html index.htm index.php default.html default.htm default.php;
        root  /home/wwwroot/wf;
 
        include mage.conf;
        #error_page   404   /404.html;
        include enable-php.conf;
 
        location ~ .*\.(gif|jpg|jpeg|png|bmp|swf)$
        {
            expires      30d;
        }
 
        location ~ .*\.(js|css)?$
        {
            expires      12h;
        }
 
        location ~ /\.
        {
            deny all;
        }
 
        access_log  /home/wwwlogs/wf.weicot.log;
    }

```









###  Apache 规则配置文件
```xml 
<IfModule mod_rewrite.c>
  Options +FollowSymlinks
  RewriteEngine On

  RewriteCond %{REQUEST_FILENAME} !-d
  RewriteCond %{REQUEST_FILENAME} !-f
  RewriteRule ^(.*)$ index.php/$1 [QSA,PT,L]
</IfModule>
```
