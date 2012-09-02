amplify.request.define("github-getRepos", "ajax", {
    url : "https://api.github.com/users/levidehaan/repos",
    type : "GET",
    decoder : function(data, status, xhr, success, error) {
        
        if(xhr.status === 404) {
            console.log("404");
            error();
        }
        else if(status === "error") {
            console.log("error: ");
            error();
        }
        else {
            success(data);
        }
    }
});

amplify.request.define("github-getReadme", "ajax", {
    url : "https://api.github.com/repos/levidehaan/{repo}/readme",
    type : "GET",
    decoder : function(data, status, xhr, success, error) {
        
        if(xhr.status === 404) {
           console.log("404");
            error();
        }
        else if(status === "error") {
            console.log("error: ");
            error();
        }
        else {
            success(data);
        }
    }
});