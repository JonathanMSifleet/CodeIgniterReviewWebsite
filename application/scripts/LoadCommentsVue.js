document.addEventListener("DOMContentLoaded", function (event) {
    var app = new Vue({
        el: '#commentsSection',
        data: {
            comments: []
        },
        created: function () {
            console.log("Created");
        },
        methods: {
            setComment: function () {

                console.log("Click");

                var reviewID = $("#reviewID").val();
                var timeStamp = $("#timeStamp").val();
                var comment = $("#commentInput").val();

                var postData = {"reviewID": reviewID, "timeStamp": timeStamp, "comment": comment};

                console.log(json.stringify(postData));

                $.post("http://localhost:82/games-review/SetComment", postData)
                    .done(function (postData) {
                        app.comments.push(postData);
                    });
            }
        }
    })
});