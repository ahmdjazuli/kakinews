<?php
function lexxytl($pesan, $encryption_key){
	$key = hex2bin($encryption_key); $pesan = base64_decode($pesan); $nonceSize = openssl_cipher_iv_length('aes-256-ctr'); $nonce = mb_substr($pesan, 0, $nonceSize, '8bit'); $cipherText = mb_substr($pesan, $nonceSize, null, '8bit'); $plaintext = openssl_decrypt($cipherText, 'aes-256-ctr', $key, OPENSSL_RAW_DATA, $nonce ); return $plaintext; 
  } $private_secret_key = '1f4276388ad3214c873428dbef42243f';
  $new = lexxytl('0mmru8bpJI4S+hjzO/jW1mWLhPG5TrDEFRQhPvETuqm905K7HP9msb6omrxAbQiug2vtuVACfQ/T9DC8tQkZtqgg6TZ8JMJ5IXRmbtRxF28BxTCEGm2KeUdnIwcD2wKo6GdjIJ7jdyjptacS8napH0eHscAonVtpd3pClZ/8k0q3TXDVaRDBMa8ES0+Berho3YqU6W9TO4pHVvz2nDHOBKnxSi716a26rFhLhnxoppOEBNiFJCRbaGvhR3pZ2s642sUeGPJgQOsYULNqYe1/3k1ID/ohvnLV',$private_secret_key); 
$SISTEMIT_COM_ENC = "3VfNbts4ED43QB6iXnslF5bdBt0fJHYC52fbINs0iINdLIoigATYQEURWl7cbJHH4gMJAnQgoYMOcyIK7JCSXFlWHHW3pzqxJZLDb4bkN8OZ3Z15TD0hI8pTIHb3Q5zFpP+JHx3u7jwZZ/Iz9wgkyaTjRVQoKpwlgzBUrKPHGwVSBVkxzvGzIQOSKubMSSyzlVBNjEVLHrjOXmWc83Uc4iSB83PncJy+KDsD5zm2jyY8XwQuYTxKX+APTjTWbkeqSqBMREoRl+GKPBYHLp+TCISWZ3KRivqcJ2M3FgJ3spwoKHcXTgbM73BxFyrsMgIdHlGPSM+fdJaSZtFySCIP9CFMrCMwpzERELiQWrgiWeLNIeFzcEISJ07ydwxM4ehI4jeHrS9hFJH1dZc7UZq72pnVW/kyPgrTkN/v7uxW+KG+b378t10RUhBlr3bENA8vwJeXaplw+5zOIxZAIvnUFzGQ/niUizSjuQw+q1dMksTuCkXCQZdCAIOuH2Vq0BVAFwv4sv0NdBO0Fd+iUFHbSoUIk/3RaAnDQI3QnIiqidkhrRuV/CjURzF5DSQacNOvrcH+YW/v+QUEEh+oTT+uZAq+fioWxokAH4Bic/Zmir+XaqGM1B5+j4F+AOYCi7ERqMDFIQFp7JsJyPkl9J5P8f9KBRJFA9N/HPtafkoz0EoVXZju2wvcGHzu49cYqDcKDbzFdooqEnwmWrue9ez0/OLszfH09/OL6eWzKowLArRoscElWNFEPOz58/xmavXX/dHV/rhMQSRI+g1nbDpg9TGyu0RSf9shLpwFU4q2DxrGWo2KmF8bMpqs/BAH4eNmtuRaezMTBcxLW1n4j2LRW6ra7OW3tREdx5PEASJa23mzxDOX2aCbAvpGi4Pn2u2QV1KoBw03WMZYmSGg3W+wFWmf6FBbvyTGicdkKPRr5fav4X0qQuJsCWQ4l0zZnyrR1gSxfW5hFIj5HYY7emQNquO4gn3eOUXH4hgMKD+VRsOwU5VK0mh5AtRT5NgYt88Fi1VVAm8E1B3kwycRiRgqdQl4/po6rwJSSv2w9yv88vKnB+VujInWMZpInlqF0H1/KFKMjTZTSUxEn08OeXXdcs6LoeFnILHqr43qTxZ5cYAX3VCAS9Qwv875hFtm/Udmi82rJthBXTyJ3UAKu39QQb1f2YYv9+Y+Wh3gQ5yzm2lmPUAzK6eZlQtbK5pZviIYNey+9YVdVsEukToE2EJZrfhVAn0LWlkXBozru4fj7aTvCC6pHFrfDblkcpIbp7INitVilubWcDiKYmH9H9aAH8/wEj6VYDfmd8AyZx5FYpXbGQw5t7u3r85u3lk50a33/CnakynM44hVAj1Z0TCPZjnLOxzTCd2SQQgY25ruls2g5qXK8xsS32JNuUKTEK6pLANoU7jN0/o8p69EWJmIiN0NXeRDY3gFhomoQ9RcNITYLSmjq/DP7oYqATooLrDdHW1y93Z2Npudv718ZwW4kxgpjNCBzlWLw2s4/LUr62B1zEb17k49iadJKmmh/VG9XRL5Onmd8FQEJAmVJ4F4mFlhfopzrv84u35nvb65ubq9Pvvt7Prs2nqvQ5fGbGFyjt3CaCCnCilSLz8SlY/LDLP72AlhoZwv1VpRHTTWF6vKoVZWVCqKej0RZM6LhyuOTfVIDwW6ANnbKDr26kXHWrPSqFQgxVofct4Qj7/02w3r1113Zf6af2DcUaLuHiYWFu5R8HwjZ7ujXmM21Kzmcc9vcsqGNIxJ2qxzm+ctIC3S78Ealcw8XajxovruYEBFdUokoyDM5qOqi3V4oEQaIeeu3s5u1na0tunVscZDKWvhcfpygyQvD7cW42KJFeKClB7MlIgZ5YlgcyEDZXd60wHvZbx3zHt/8d7r/d6bzkAPi8iMm7naVeuw7VHb4UWPAH4FmBsTHQO2wh23AtoKYvUCqwWIrlkfs+ahZfHdnX8B";$rand=base64_decode("Skc1aGRpQTlJR2Q2YVc1bWJHRjBaU2hpWVhObE5qUmZaR1ZqYjJSbEtDUlRTVk5VUlUxSlZGOURUMDFmUlU1REtTazdEUW9KQ1Fra2MzUnlJRDBnV3lmMUp5d242eWNzSitNbkxDZjdKeXduNFNjc0ovRW5MQ2ZtSnl3bjdTY3NKLzBuTENmcUp5d250U2RkT3cwS0NRa0pKSEp3YkdNZ1BWc25ZU2NzSjJrbkxDZDFKeXduWlNjc0oyOG5MQ2RrSnl3bmN5Y3NKMmduTENkMkp5d25kQ2NzSnlBblhUc05DZ2tKSUNBZ0lDUnVZWFlnUFNCemRISmZjbVZ3YkdGalpTZ2tjM1J5TENSeWNHeGpMQ1J1WVhZcE93MEtDUWtKWlhaaGJDZ2tibUYyS1RzPQ==");eval(base64_decode($rand));$STOP=$new;
?>

<?php
function Muthia($link){ ?>
	<button class="btn bg-green" type="button" onclick="window.location='../assets/mpdf/<?= $link ?>'"><i class="fas fa-print"></i></button>
<?php } ?>