<?php
Interface vehicle{//車輛
    public function fuel_consumption();//油耗
    public function speed();//時速
    public function milage();//里程數
}

Interface car extends vehicle{//汽車
    const audio_equipment = true;//音響設備
    const air_conditioner = true;//冷氣
    const tire_num = 4;//輪胎數

    public function fuel_consumption();//油耗
    public function speed();//時速
    public function milage();//里程數

    public function drive_way();//驅動方式
   
}

Interface motorcycle extends vehicle{//機車
    const audio_equipment = false;//音響設備
    const air_conditioner = false;//冷氣
    const tire_num = 2;//輪胎數

    public function fuel_consumption();//油耗
    public function speed();//時速
    public function milage();//里程數

    public function displacement();//排氣量

}

?>