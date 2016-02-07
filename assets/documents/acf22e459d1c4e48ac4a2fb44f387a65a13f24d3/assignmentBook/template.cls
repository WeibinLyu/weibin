% needed
\NeedsTeXFormat{LaTeX2e}

% class name
\ProvidesClass{template}

% based on article
\LoadClass[a4paper, 12pt]{article}

% === package === 

% 
\RequirePackage[adobefonts]{ctex}

% 插入图片宏包
\RequirePackage{graphicx}

% 下划线宏包
\RequirePackage{ulem}

% 数学符号宏包
\RequirePackage{amsmath}
\RequirePackage{amssymb}

% 方框
\RequirePackage{wasysym}

% 表格伸缩
%\renewcommand{\arraystretch}{3}

% 表格 居中
\RequirePackage{array}
\RequirePackage{makecell}

% 表格内断行
\RequirePackage{pbox}

% 自定章节风格
\RequirePackage{titlesec}

% 表格
\RequirePackage{longtable}
\RequirePackage{tabu}

\RequirePackage{ltablex}
\RequirePackage{tabularx}
\RequirePackage{ragged2e}

% 页边距
\RequirePackage[top=2.5cm, bottom=2.5cm, left=2.5cm, right=2.5cm]{geometry}

% 行间距
\RequirePackage{setspace}

% 字体大小
\RequirePackage{lmodern}

% 表格宽度自适应
%\RequirePackage{adjustbox}

% === style ===

% 初号 42pt
% 小初 36pt
% 
% 三号 15.75pt
% 四号 14pt
% 小四 12pt
% 五号 10.5pt
% 小五 9pt

% 字体设置
\setmainfont[BoldFont=SimHei]{Times New Roman}
%\setmonofont{}
\setCJKmainfont[BoldFont=SimHei, ItalicFont=KaiTi]{SimSun}
\setCJKmonofont{SimHei}

% 不会把英文设置为黑体
\setCJKfamilyfont{hei}{SimHei}
\newcommand{\hei}[1]{\CJKfamily{hei}#1}

% 没有页眉和页脚
\pagestyle{empty}

% 顿号分隔序号与标题，用 subsection 会很丑，这这里不需要用到
\titlelabel{\thetitle、}
\renewcommand{\thesection}{\chinese{section}}

% 表格竖直居中 默认是上下 3 7 分

% === macro ===
% GUET Logo
\newcommand{\guetLogo}[1]{
\begin{figure}[htbp]
    \centerline{\includegraphics[width=6in]{#1}}
\end{figure}
}

% Document name
\newcommand{\documentName}[1]{
\begin{center}
    {\fontsize{32}{12}\selectfont #1}
\end{center}
}

% title info
% 15em 大概容纳 15 个汉字和 30 个英文
\newcommand{\titleInfo}[2]{
\begin{large}\makebox[6em][s]{#1}：\uline{\makebox[15em]{#2}}\\[1em]\end{large}
}

\newcommand{\underBlank}[1]{
\begin{large}\makebox[7em][s]{}\uline{\makebox[15em]{\textbf{#1}}}\\[1em]\end{large}
}

\newcommand{\subject}[1]{
\titleInfo{课题}{\textbf{#1}}
}
\newcommand{\academy}[1]{
\titleInfo{学院}{#1}
}
\newcommand{\major}[1]{
\titleInfo{专业}{#1}
}
\newcommand{\studentName}[1]{
\titleInfo{学生姓名}{#1}
}
\newcommand{\studentId}[1]{
\titleInfo{学号}{#1}
}
\newcommand{\teacherAcademy}[1]{
\titleInfo{指导教师单位}{#1}
}
\newcommand{\teacherName}[1]{
\titleInfo{姓名}{#1}
}
\newcommand{\teacherJob}[1]{
\titleInfo{职称}{#1}
}

% 方框和打钩方框
\newcommand{\block}[1]{
$\text{\rlap{}}\square$#1
}
\newcommand{\blockC}[1]{
$\text{\rlap{$\checkmark$}}\square$#1
}


