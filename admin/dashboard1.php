




            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            
                            
                        </div>
                        <h4 class="mb-0">
                            <span class="count"><?php 
                            $query="SELECT COUNT(*) from news_tbl where deleted='0'";
                            $result=$link->query($query);
                            while($row=mysqli_fetch_array($result))
                            {
                                $rowcount=$row[0];
                            }
                            echo $rowcount;

                            ?></span>
                        </h4>
                        <p class="text-light">Total news</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart1"></canvas>
                        </div>

                    </div>

                </div>
            </div>
            


           