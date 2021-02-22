<?php 

namespace teamriverbubbles\opensteam;

class Index
{
    public function opensteamgame($appid, $args)
    {
        if($args == "")
        {
            $url = "steam://run/$appid//$args/";
        }
        else 
        {
            $url = "steam://run/$appid/";
        }
        
        return header("Location: $url");;
    }

    public function opensteamnong()
    {
        return header("Location: steam://AddNonSteamGame");
    }

    public function opensteam2server($serverip, $port)
    {
        $url = "steam://connect/$serverip:$port";
        
        return header("Location: $url");;
    }

    public function opensteamad($appid)
    {
        $url = "steam://advertise/$appid";
        
        return header("Location: $url");;
    }

    public function opensteamnews($appid)
    {
        $url = "steam://appnews/$appid";
        
        return header("Location: $url");;
    }

    public function opensteambackup($appid)
    {
        $url = "steam://backup/$appid";
        
        return header("Location: $url");;
    }

    public function opensteammedia()
    {
        $url = "steam://browsemedia";
        
        return header("Location: $url");;
    }

    public function opensteamreqs($appid)
    {
        $url = "steam://checksysreqs/$appid";
        
        return header("Location: $url");;
    }

    public function opensteamdefrag($appid)
    {
        $url = "steam://defrag/$appid";
        
        return header("Location: $url");;
    }

    public function exitsteam()
    {
        $url = "steam://ExitSteam";
        
        return header("Location: $url");;
    }

    public function opensteamfri()
    {
        $url = "steam://friends/";
        
        return header("Location: $url");;
    }

    public function opensteamadd($id)
    {
        $url = "steam://friends/add/$id";
        
        return header("Location: $url");;
    }

    public function opensteamfrifri($id)
    {
        $url = "steam://friends/friends/$id";
        
        return header("Location: $url");;
    }

    public function opensteamjchat($id)
    {
        $url = "steam://friends/joinchat/$id";
        
        return header("Location: $url");;
    }

    public function opensteammessage($id)
    {
        $url = "steam://friends/message/$id";
        
        return header("Location: $url");;
    }

    public function opensteamplayers()
    {
        $url = "steam://friends/players";
        
        return header("Location: $url");;
    }

    public function opensteamso()
    {
        $url = "steam://friends/settings/hideoffline";
        
        return header("Location: $url");;
    }

    public function opensteamss()
    {
        $url = "steam://friends/settings/showavatars";
        
        return header("Location: $url");;
    }

    public function opensteamsbn()
    {
        $url = "steam://friends/settings/sortbyname";
        
        return header("Location: $url");;
    }

    public function opensteamsa()
    {
        $url = "steam://friends/status/away";
        
        return header("Location: $url");;
    }

    public function opensteamsb()
    {
        $url = "steam://friends/status/busy";
        
        return header("Location: $url");;
    }

    public function opensteamsi()
    {
        $url = "steam://friends/status/invisible";
        
        return header("Location: $url");;
    }

    public function opensteamst()
    {
        $url = "steam://friends/status/trade";
        
        return header("Location: $url");;
    }

    public function opensteamsp()
    {
        $url = "steam://friends/status/play";
        
        return header("Location: $url");;
    }

    public function opensteamsof()
    {
        $url = "steam://friends/status/offline";
        
        return header("Location: $url");;
    }

    public function opensteamson()
    {
        $url = "steam://friends/status/online";
        
        return header("Location: $url");;
    }

    public function opensteamfc()
    {
        $url = "steam://flushconfig/";
        
        return header("Location: $url");;
    }

    public function opensteamgp()
    {
        $url = "steam://guestpasses/";
        
        return header("Location: $url");;
    }

    public function opensteamhp($id)
    {
        $url = "steam://hardwarepromo/$id";
        
        return header("Location: $url");;
    }

    public function opensteamin($id)
    {
        $url = "steam://install/$id";
        
        return header("Location: $url");;
    }

    public function opensteamina($id)
    {
        $url = "steam://installaddon/$id";
        
        return header("Location: $url");;
    }

    public function opensteammp($command)
    {
        $url = "steam://musicplayer/$command";
        
        return header("Location: $url");;
    }

    public function opensteamnav($command)
    {
        $url = "steam://nav/$command";
        
        return header("Location: $url");;
    }

    public function opensteamop($command)
    {
        $url = "steam://open/$command";
        
        return header("Location: $url");;
    }

    public function opensteamourl($urli)
    {
        $url = "steam://openurl/$urli";
        
        return header("Location: $url");;
    }

    public function opensteamoeurl($urli)
    {
        $url = "steam://openurl_external/$urli";
        
        return header("Location: $url");;
    }

    public function opensteampaypal()
    {
        $url = "steam://paypal/cancel";
        
        return header("Location: $url");;
    }

    public function opensteamprl($id)
    {
        $url = "steam://preload/$id";
        
        return header("Location: $url");;
    }

    public function opensteampub($name)
    {
        $url = "steam://publisher/$name";
        
        return header("Location: $url");;
    }

    public function opensteampur($id)
    {
        $url = "steam://purchase/$id";
        
        return header("Location: $url");;
    }

    public function opensteampurs($id)
    {
        $url = "steam://purchase/subscription/$id";
        
        return header("Location: $url");;
    }

    public function opensteamruns($id)
    {
        $url = "steam://runsafe/$id";
        
        return header("Location: $url");;
    }

    public function opensteamrunid($id)
    {
        $url = "steam://rungameid/$id";
        
        return header("Location: $url");;
    }

    public function opensteamsett($command)
    {
        $url = "steam://settings/$command";
        
        return header("Location: $url");;
    }

    public function opensteamsstr()
    {
        $url = "steam://stopstreaming";
        
        return header("Location: $url");;
    }

    public function opensteamstore($id)
    {
        $url = "steam://store/$id";
        
        return header("Location: $url");;
    }

    public function opensteamsupport($params)
    {
        $url = "steam://support/$params";
        
        return header("Location: $url");;
    }

    public function opensteamsurvey($id)
    {
        $url = "steam://takesurvey/$id";
        
        return header("Location: $url");;
    }

    public function opensteamuin($id)
    {
        $url = "steam://uninstall/$id";
        
        return header("Location: $url");;
    }

    public function opensteamuf()
    {
        $url = "steam://UpdateFirmware";
        
        return header("Location: $url");;
    }

    public function opensteamspage($page)
    {
        $url = "steam://url/$page";
        
        return header("Location: $url");;
    }

    public function opensteamun($id)
    {
        $url = "steam://updatenews/$id";
        
        return header("Location: $url");;
    }

    
    public function opensteamval($id)
    {
        $url = "steam://validate/$id";
        
        return header("Location: $url");;
    }

}