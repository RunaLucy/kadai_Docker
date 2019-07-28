<?php
class Sample_UserManager
{
	//require_once('/sample/lib/adodb5/adodb.inc.php');
    public function auth($mailaddress, $password)
    {
        // このロジックはダミーです。
        // 実際にはまともに認証処理を行う
	//$db = $this->getDB();
	//$rs = $this->$db->query('SELECT user_id FROM users WHERE user_id=1');
	//var_dump($rs);
//	echo 'testtest';
        if ($mailaddress != $password) {
            return Ethna::raiseNotice('メールアドレスまたはパスワードが正しくありません', E_SAMPLE_AUTH);
	//var_dump($rs);
        }

        //成功時にはnullを返す
        return null;
    }
}
