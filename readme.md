### PHP 算法
    面向对象编程， 测试驱动
    
###注意事项
    
    1. 代码格式化工具
        1. 安装
            1. wget https://cs.symfony.com/download/php-cs-fixer-v2.phar -O php-cs-fix
            2. chmod +x  php-cs-fixer
            3. mv  php-cs-fixer /usr/local/bin
        2. 使用
            1. php-cs-fixer fix --config ./build/php-cs-fixer.php --diff-format udiff
    2. 代码测试工具
        1. wget https://codeception.com/releases/2.5.3/codecept.phar
        2. chmod +x  codecept.phar 
        3. mv  codecept.phar /usr/local/bin/codecept
###单元测试

       codecept run unit [path可选]
