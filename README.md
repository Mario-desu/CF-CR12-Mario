# CF-CR12-Mario
Dear trainers,

I hope you like it :-). 
In the Navbar click on "Add a Destination" to do so. By clicking on API you will get to the API (bonus points). You can also ad the id in the URL to filter.

Below that you will find Serri's joke. It will show a different a different one, when clicking on the button or refreshing the page. Unfortunately I couldn't manage to let it work with Ajax :-(. A few points would be nice though.

Below that you will find all destinations in the database in cards. You can find some Infos there, but more when you click on details. On the details-page you will also find the map with the pointer to the selected destination
You can easily change the destinations after clicking on the edit-icon or delete after clicking on the bin-icon.
So I hope I didn't forget any details.

PS 18:43: I hope you are not angry that I always write you after submitting, but I think it's better to tell you.  I checked everything right before submitting. Everything was working. Though I had some issues with the CSS-connection to styles.css. Some css from the css-file had no effect on the website. Now I just opened the page and suddenly the buttons of the cards were outside of the cards. So it seems that the connection suddenly worked. I saw what was the reason for the buttons. I was experimenting a bit with the cards today. There was still following in styles.css: 
.card-body {
    position: relative;
    height: 48%;
    padding: 0;
  }

.card-footer{
    height: 25%;
    position: absolute;
    width: 100%;
    bottom: 0;
    /* left: 50%; */
}
.card-text {
    /* height: 35%; */
    min-height: 27%;
}


Please remove that, then everything should appear as it should. Sorry and thank you.

Have a nice day,

regards.

Mario
