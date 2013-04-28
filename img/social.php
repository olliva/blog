'; $fbend = '';
        $fbpage = $facebook;
        $fbparts = explode($fbbegin,$fbpage);
        $fbpage = $fbparts[1];
        $fbparts = explode($fbend,$fbpage);
        $fbcount = $fbparts[0];
        if($fbcount == '') { $fbcount = '0'; }
}
function twit_count() {
        global $tcount;
        $twit = file_get_contents('http://api.twitter.com/YOURPOST/PAGE');
        $begin = ''; $end = '';
        $page = $twit;
        $parts = explode($begin,$page);
        $page = $parts[1];
        $parts = explode($end,$page);
        $tcount = $parts[0];
        if($tcount == '') { $tcount = '0'; }
}
?>