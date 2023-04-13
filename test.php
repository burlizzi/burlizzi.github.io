<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?> 
 </body>
</html>
[ `date '+%s'` -gt  $((`date -d "$(date +%Y)0331" '+%s'` - `date '+%u'` * 24 *3600)) ] && [ `date '+%s'` -lt  $((`date -d "$(date +%Y)1031" '+%s'` - `date '+%u'` * 24 *3600)) ] && echo ciao
