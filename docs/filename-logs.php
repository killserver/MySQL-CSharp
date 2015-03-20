<h1>Filename_Logs</h1>
<br />
<h2>Описание:</h2><hr />
<pre class="brush: csharp;">
void Filename_Logs(string file)
</pre>
Изменяет имя и расширение файла-лога работы компонента<br />
<h2>Список параметров</h2><hr />
<br />
<h3 class="perem">file</h3><span class="paragraph">Переменная отвечающая за имя и тип файла-лога</span>
<br />
<h2>Пример:</h2><hr />
<pre class="brush: csharp;">
using KilleR.MySqli;

namespace ConsoleApplication1
{
    class Program
    {
        static void Main(string[] args)
        {
            MySqli Test = new MySqli("127.0.0.1", "root", "", "mysql");
			Test.Filename_Logs("logs.mysql.log");
        }
    }
}
</pre>
