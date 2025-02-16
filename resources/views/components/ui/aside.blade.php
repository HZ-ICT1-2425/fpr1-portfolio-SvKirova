<div id="asideMenu" class="asideMenu">
    <a href="javascript:void(0)" class="closeButton" onclick="closeMenu()">&times;</a>
    <aside>
       {{ $slot }}
    </aside>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openMenu()">&#9776; </span>
