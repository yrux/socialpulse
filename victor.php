<?php

function sign($appKey, $privateKey, $timestamp){
    $content = "appKey=$appKey&signType=rsa2&timestamp=$timestamp";
    $signature = "";
    openssl_sign($content, $signature, $privateKey, OPENSSL_ALGO_SHA256);
    return base64_encode($signature);
}

function main(){
    $timestamp = round(microtime(true) * 1000);
    echo "$timestamp\n";
    $appKey = '20210826880410570535206912';
    $key = 'MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQDvpDhcoc0qA9ZJEzDQzlYYh0VERD0Z0jv3uf0YWjp8n9nzEvKTJutdKHliS4GKUjEpv+WdQUwIOcXIYgl1Hsox2DHZek2J5eLmurHdgLVvbhBqbWrch4pKjN4OOTPi2aqEj9t3WlQZxJuHOVcZ7NK9pm509Aap1VvZloubAacsP/6FPBuUt/smpOG+DSFvM8UR45YkSWPVfmXe/fdhsaNSn7iXgRqd3eBu+Zh7EIe/bCzciHFeIL4jF5q5iEU16G+AIUpN8zt6Z97ZEKGrC5eTkidw6GmF+yfGufxL22Jd4NTWJylI0DZ3CMFNKeieO0nVem0AusSXPUkrTfjDNJZRAgMBAAECggEAVs26aLtnMI/hP+kGpqwG/a2KBpddNowzkqE5L2gHhXr1nJnBalIPsVfm2BcXnj31dvT+vD6ZxuT+Yn44hMcZYIK6U9d8XLX7wa3gnaZwkiNhKNvneGhUTHrIOIi55bMIlCnzykDa89aGq622gjqJf47Ytd5qx3v0YFWqzgQERP9Zwd3he8mGhtJAUKN89StmwTnpIdmdcHNfFcusg+xD/8ui9+L9dEG0RCuWodyCfZOmcH7IK5E6rDnAr8xAXKhzesRTrcN+BcF+VNgMQg7+ouAShTO73ohAq8aV+VO44HovEdPln3aMYsgZHdq5Ksj3dRf2b6p5XpCpiP3pFwmHzQKBgQD7kWjQXFzOaPCCboO3ueYb5rvEmYz8Gw+AZxnitF3MPMRNmBmWbdzsNcKrbOkRgChE4Lfj91rBonmb8vNBQXD1bXPAStw7LyikeCLBAQb3+/L4vpNCZ/xrso2zaQHEmoiSjJzQ6ABTQVxGZP+4Wl8Wx4VN7f73d6/IRr673oFtPwKBgQDz3QVvdTAyhzy+nA0Ly2gVEODxTaBHDV0eX5YnFC0jL980ptjaFvj1G/AOWeusA9KZYL/96BROuZ3S2MZ4CMZe5SOu5GWbjDQx8+ZDVgettbkSBOcMSKpx+KOJRypiwxBQOFGd6L3mzBJ5yS8rpOHAI+M0GxpX/NbB+kYJHAPIbwKBgEPfnZnp8Zg3M/zc+GjPnUgV3r9Sdnlmi64nIxLJey0pkAUnbm/pwFtyvc0mm1N/cl3zC2pUSIZJ4emziPIoR+PP3hUZnYXSWXLWfvn33vt1XL7EHFMkXzRnflfTkwiKcSKpEX5DuiK8VbsgcOY6a8Fnn43BErON9T1h6QAjLmRdAoGBAKLOFvffS8sgAEzcz9Tk+lq+Bv7yLSPiZx2FATCbxrqsFh8HmNSY66JwAWcDX1RaxPnC3sp7aztXrmb6dB3k9dKataToNHGRO7NxunOP9tZg8Op3vWy1Ap3OOhfHHCQNSFHWF58Np+JysY7+4nAHxvNIwkGiKoc9dH7SQHmKa3gfAoGBAJdnAmbUh2XMbrvHMK7136SRAehoEzXzn+poDwvlPM0beacI3vvjY9wij7T86PFMPigTOTaQDTgUdI6haOd1pnxBziEbXCgyeA3Hkk6jKlRWpu6TlEwx92f6PoyWSKjrP9Q/kGhyZOsKtq5AkskZv801Qg6MgmuuHjUV9jb0+K8+';
    $privateKey = "-----BEGIN RSA PRIVATE KEY-----\n$key\n-----END RSA PRIVATE KEY-----\n";
    $signature = sign($appKey, $privateKey, $timestamp);
    echo "$signature\n";
}

main();