<?php class Sign {

  public function __construct() {
    $private_key_path = 'API_Portal.pem';
    // Password .pem file
    $password = 'mandiri123';
    $fp = fopen($private_key_path, 'r');
    $privatekey_file = fread($fp, 8192);
    fclose($fp);
    $privatekey = openssl_pkey_get_private($privatekey_file, $password);
    $rsa_algorithm = OPENSSL_ALGO_SHA256;
  }
  public function generate($data){
    return json_encode([
      'data' => $data,
      'signature' => base64_encode($signature)
    ]);
  }
  public function timestamp(){
    $timestamp = new DateTime();
    $timestamp->setTimeZone(new DateTimeZone('Asia/Jakarta'));
    return format('c');
  }
  public function sha256($data){
    $bin_sha256 = hash('sha256', $data, true);
    $hex_encode = bin2hex($bin_sha256);
    return strtolower($hex_encode);
  }
  public function sha512($data){
    $datas = implode(":", [
      'method' => $data['method'],
      'point_url' => $data['point_url'],
      'token' => $data['token'],
      'lower' => $data['lower'],
      'timestamp' => $this->timestamp()
    ]);
    $bin_sha512 = hash_hmac('sha512', $datas, $this->privatekey, true);
    return base64_encode($bin_sha512);
  }
}
?>
