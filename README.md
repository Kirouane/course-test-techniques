#Go PDF Bot
cd /home/nassim.kirouane/go/src/github.com/kirouane/go-pdf-bot && go run $(ls -1 *.go | grep -v _test.go)
google-chrome-stable --disable-gpu  --headless --remote-debugging-port=9222

#Cours
cd /var/www/course-test-techniques/backend && node index.js

cd /var/www/course-test-techniques/frontend && php -S localhost:8002

#Mountebank
cd /var/www/course-test-techniques/test/mountebank && node_modules/.bin/mb --configfile imposters.ejs