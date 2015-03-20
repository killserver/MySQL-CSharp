<h1>Path_Logs</h1>
<br />
<h2>Описание:</h2><hr />
<pre class="brush: csharp;">
void Path_Logs(string paths)
</pre>
Изменяет путь к логам работы компонента<br />
<h2>Список параметров</h2><hr />
<br />
<h3 class="perem">paths</h3><span class="paragraph">Переменная отвечающая за путь к каталогу файла-лога</span>
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
            Test.Path_Logs("D:\\test");
        }
    }
}
</pre>