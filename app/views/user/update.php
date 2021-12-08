<form method="post">
    <input type="text" name="name" placeholder="Name" value="<?php echo $user->name?>">
    <input type="email" name="email" placeholder="Email"  value="<?php echo $user->email?>">
    <input type="password" name="password" placeholder="Password" value="<?php echo $user->password?>">
    <input type="date" name="birthday" placeholder="Date"  value="<?php echo $user->birthday?>">
    <!--    <input type="text" name="country" placeholder="Country">-->
    <select name="country">
        <option <?php echo $user->country=="VN"?"selected":"" ?> value="VN">VN</option>
        <option <?php echo $user->country=="USA"?"selected":"" ?> value="USA">USA</option>
        <option  <?php echo $user->country=="CN"?"selected":"" ?> value="CN">CN</option>
    </select>
    <button>Add new user</button>
    <a href="index.php">
        <button>Back</button></a>
</form>