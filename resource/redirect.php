    
<!--强制使用Https
	判断非本机且未使用 https 时，强制重定向到 https  
	by 李凡 2023-01-05 
-->

<script>
    if ((!window.location.host.startsWith("localhost")) && (window.location.protocol != "https:"))
        window.location = window.location.toString().replace(/^http:/, "https:");
</script>   

