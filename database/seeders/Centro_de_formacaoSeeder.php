<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Centro_de_formacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('centros_de_formacaos')->insert([
            [
                'imglink' => 'https://th.bing.com/th/id/R.167618a43c0d6a5cf62e35ac6cc12a57?rik=IYMcSGC8BrnHSg&riu=http%3a%2f%2fwww.weare-dvm.com%2fwp-content%2fuploads%2f2017%2f11%2fagostinho.jpg&ehk=xSDpv%2bDDYUkTiotS%2fUXPt0HAx1VnjjM1tc8lftl0lKo%3d&risl=&pid=ImgRaw&r=0',
                'nome' => 'Universidade Agostinho Neto',
                'localizacao' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126145.41399168564!2d13.153796942685258!3d-8.875478701752817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f6173234f65d%3A0x9d83c5c51df34c9a!2sCampus%20Universit%C3%A1rio%20Universidade%20Agostinho%20Neto!5e0!3m2!1spt-PT!2sao!4v1715173316305!5m2!1spt-PT!2sao',
                'vagas' => 5570 ,
                'imagemfau' => 'agostinho.jpg', 
            ], 
            [
                'imglink' => 'https://agencia.ecclesia.pt/portal/wp-content/uploads/2021/02/UCP_Lisboa_Biblioteca.jpg',
                'nome' => 'Universidade Catolica',
                'localizacao' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126145.42641359997!2d13.153796506980866!3d-8.875442570912275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f14c3ecde783%3A0x25bc7ad1692d2f9b!2sUniversidade%20Cat%C3%B3lica%20de%20Angola!5e0!3m2!1spt-PT!2sao!4v1715174218428!5m2!1spt-PT!2sao',
                'vagas' => 1200,
                'imagemfau' => 'catolica.jpg',        
            ],
            [
                'imglink' => 'https://www.angowork.com/wp-content/uploads/2020/12/original_-3.png',
                'nome' => 'Universidade Óscar Ribras',
                'localizacao' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3941.5443395984403!2d13.180290075144494!3d-8.921882291135216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f53053ba8e4d%3A0xc1e846aafcaac315!2sUniversidade%20%C3%93scar%20Ribas!5e0!3m2!1spt-PT!2sao!4v1715176437075!5m2!1spt-PT!2sao',
                'vagas' => 300,
                'imagemfau' => 'ribas.jpg',
            ],
            [
                'imglink' => 'https://media-exp1.licdn.com/dms/image/C4D1BAQFjqZIzlKyA2Q/company-background_10000/0/1568891799805?e=2147483647&v=beta&t=GZyla3efryqFAY51XHwz5Xv1Ox5eLC00nnRTb3vY9qs',
                'nome' => 'Universidade Independente de Angola',
                'localizacao' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3941.9030941021415!2d13.181888175144117!3d-8.888601491167165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f4c84736a611%3A0xef01a7202056e079!2sUniversidade%20Independente%20de%20Angola!5e0!3m2!1spt-PT!2sao!4v1715177645456!5m2!1spt-PT!2sao',
                'vagas' => 800,
                'imagemfau' => 'unia.jpg'
            ],
            [         
                'imglink' => 'https://th.bing.com/th/id/R.5aeff1c25c69065a4adab591ae689b6c?rik=5Qs%2bZSkVhRxRog&riu=http%3a%2f%2f4.bp.blogspot.com%2f-BDIGiGS8JrY%2fUcdzKQwK6iI%2fAAAAAAAAAGo%2fNWsF8slq-40%2fs1600%2fUNIVERSIDADE%2bGREG%2525C3%252593RIO%2bSEMEDO.jpg&ehk=w8KH47qPQsu4fS7B1ONFLJuBVgeDpnnW3YqFNMAlDN4%3d&risl=&pid=ImgRaw&r=0&sres=1&sresct=1',
                'nome' => 'Universidade Grégorio Semedo',
                'localizacao' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3941.7888580851645!2d13.198279575144342!3d-8.899212291157028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f4e65d2c8b99%3A0xa3d8c59ca5e748cb!2sUniversidade%20Greg%C3%B3rio%20Semedo!5e0!3m2!1spt-PT!2sao!4v1715177917569!5m2!1spt-PT!2sao',
                'vagas' => 400,
                'imagemfau' => 'gregorio.jpg',

            ],
            [
                'imglink' => 'https://th.bing.com/th/id/R.bc77a6da6b28f2f33fff213e9003f821?rik=epOg%2bCybEkbpzw&riu=http%3a%2f%2fwww.redeangola.info%2fwp-content%2fuploads%2f2015%2f04%2fHARD_UNIVERSIDADE-METODISTA-DE-ANGOLA_AMPE-ROGERIO-2.jpg&ehk=aOu5VVCV6lf65qWJ4BXR2%2b%2b538aGtkdrtUCWMuy7dts%3d&risl=&pid=ImgRaw&r=0',
                'nome' => 'Universidade Metodista de Angola',
                'localizacao' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.697158318913!2d13.23321457514327!3d-8.8144947912385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f24e990d76b5%3A0x2664e4edecd2d8a4!2sUniversidade%20Metodista%20de%20Angola!5e0!3m2!1spt-PT!2sao!4v1715178169569!5m2!1spt-PT!2sao',
                'vagas' => 480,
                'imagemfau' => 'metodista.jpg',
            ],
            [
                'imglink' => 'https://th.bing.com/th/id/R.67b85ea3990496794b26bef40b853396?rik=CFI7lh3OPPbXMQ&pid=ImgRaw&r=0',
                'nome' => 'Universidade Lusíadas',
                'localizacao' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.682318553423!2d13.227224875143342!3d-8.815885391237156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f2522f49dc0b%3A0x1e6469bda5ac2983!2sUniversidade%20Lus%C3%ADada%20de%20Angola!5e0!3m2!1spt-PT!2sao!4v1715178676445!5m2!1spt-PT!2sao',
                'vagas' => 639,
                'imagemfau' => 'lusiada.jpg',
            ],
            [
                'imglink' => 'https://th.bing.com/th/id/R.d83c1c7977fc4c0c80c06afb3bb8809c?rik=uPzImiqybYY6Jg&pid=ImgRaw&r=0',
                'nome' => 'Universidade Jean Piaget',
                'localizacao' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3941.70105778046!2d13.3983363751444!3d-8.90735909114921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f85656f8de85%3A0x56d2db07c0880ca7!2sJean%20Piaget%20University%20-%20Angola!5e0!3m2!1sen!2sao!4v1715179206562!5m2!1sen!2sao',
                'vagas' => 589,
                'imagemfau' => 'jean.jpg'
            ],

            [
                'imglink' => 'https://angola24horas.com/media/k2/items/cache/5bdd4252c5b965f8027d9bf156348cb2_L.jpg',
                'nome' =>'Universidade Upra Angola',
                'localizacao' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3941.607658624972!2d13.191170575144525!3d-8.916017291140921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f523a8e02ffd%3A0xa0ac7f77a712067e!2sUniversidade%20Privada%20de%20Angola!5e0!3m2!1spt-PT!2sao!4v1715179797566!5m2!1spt-PT!2sao',
                'vagas' => 833,
                'imagemfau' => 'upra.jpg'

            ],
            
        ]);
    }
}
