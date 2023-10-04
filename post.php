<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/messageform.css">
    <title>Message Form</title>
</head>
<body>
    <form action="" method="">
        <div>
        <input 
            type="text"
            name="topic"
            id="topic"
            placeholder="Enter your topic"
            required
        >
    </div>
        <div>
        <select id="country" name="country">
            <option value="select">Select Section</option>
            <option value="politics">Politics</option>
            <option value="entertainment">Entertainment</option>
            <option value="sport">Sport</option>
            <option value="business">Business</option>
            <option value="tech">Tech</option>
            <option value="others">Others</option>
        </select>
    </div>
        <div>
        <textarea 
            name="message" 
            id="message" 
            name="message" 
            placeholder="Type your message here"
            cols="30"
            rows="10"
        >  
        </textarea>
    </div>
        <div>
         <input type="file"
            name="file"
            id="file"
            value="Upload image to display"
          >
        </div>
        <div>
            <input type="submit" name="submit" id="submit" value="POST">
        </div>
    </form>
</body>
</html>