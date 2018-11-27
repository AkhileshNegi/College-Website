<html>
<body>
<script>
var seconds=5;
var minutes=0;
var hours=0;
var timer=setInterval(function()
{
seconds--;
if(seconds==-1)
{
seconds=59;
minutes--;
if(minutes==-1)
{
minutes=59;
hours--;
if(hours==-1)
{
alert("timer finished");
clearInterval(timer);
return;
}
}
}
span.text(correctNum(hours)+":"+correctNum(minutes)+":"+correctNum(seconds));},1000);
</script>
</body>
</html>