        $(document).ready(function(){
            // Pixel code
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');

           
            fbq('init', '259678283564900');
            fbq('init', '6547866611970727');
            fbq('init', '259678283564900');
            fbq('init', '1082488936455709');
            // ... (other init codes)
            fbq('track', 'PageView');
        });

        function showline() {
            fbq('track', 'Purchase', {value: 100, currency: 'USD'});
        }
