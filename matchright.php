<div class="profile_search1">
    <!-- Form for profile search (currently commented out) -->
    <!--
    <form>
        <input type="text" class="m_1" name="ne" size="30" required="" placeholder="Enter Profile ID :">
        <input type="submit" value="Go">
    </form>
    -->
</div>

<div class="profiles">
    <?php
    // Fetching profiles from the database
    $sql = "SELECT * FROM customer ORDER BY profilecreationdate DESC";
    $result = mysqlexec($sql);
    
    // Loop through each profile
    while ($row = mysqli_fetch_assoc($result)) {
        $profid = $row['cust_id'];
        
        // Outputting profile information
        echo "<ul class=\"profile_item\">";
        echo "<a href=\"view_profile.php?id={$profid}\">";
        echo "<li class=\"profile_item-desc\">";
        echo "<h4>{$row['firstname']} {$row['lastname']}</h4>";
        echo "<p>{$row['age']} Yrs, {$row['religion']}</p>";
        echo "<h5>View Full Profile</h5>";
        echo "</li>";
        echo "</a>";
        echo "</ul>";
    }
    ?>
</div>
