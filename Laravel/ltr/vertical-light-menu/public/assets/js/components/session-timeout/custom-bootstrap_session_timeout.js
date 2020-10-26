var SessionTimeout=function() {
    var e=function() {
        $.sessionTimeout( {
            title:"Session Timeout Notification", 
            message:"Your session is about to expire.", 
            keepAliveUrl:"", 
            redirUrl:"/authentication/lockscreen_boxed", 
            logoutUrl:"/authentication/login_boxed", 
            warnAfter:6e3, 
            redirAfter:21e3, 
            ignoreUserActivity:!0, 
            countdownMessage:"Redirecting in {timer}.", 
            countdownBar: !0
        }
        )
    };
    return {
        init:function() {
            e()
        }
    }
}

();
jQuery(document).ready(function() {
    SessionTimeout.init()
}
);