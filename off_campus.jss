function incrementValue()
{
    var value = parseInt(document.getElementById('comment_post_ID').value, 0);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('comment_post_ID').value = value;
}