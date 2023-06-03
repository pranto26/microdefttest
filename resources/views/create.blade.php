<html>
    <body>
        <form action="" method="POST">
            @csrf
            <fieldset>
        <label>Name</label><br>
        <input type="text" name="name" /> <br>

        <label>Class</label><br>
        <input type="text" name="class" /> <br>

        <label>DOB</label><br>
        <input type="datetime" name="date_of Birth" /> <br>
        <label>Department</label><br>
        <input type="text" name="dept_id" /> <br>
            </fieldset>

        <button type="submit"> Add</button>
        </form>
    </body>
</html>
